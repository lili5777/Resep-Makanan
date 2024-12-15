<?php

namespace App\Http\Controllers;

use App\Models\resep;
use App\Models\resepmasuk;
use App\Models\resepkeluar;
use App\Models\User;
use Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Controllerresep extends Controller
{
    public function home(Request $request){
        $ketik=$request->input('search');
        $data=resep::where('namaresep','LIKE','%'.$ketik.'%')->get();
        // $data=resep::all();
        return view('welcome',compact('data'));
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }

    public function formlogin(){
        if(Auth::check()){
            return redirect('/admin');
        }
        return view('login');
    }
    public function formregister(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'name'=>'required'
        ]);
        $user= new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);
        return redirect()->intended('/admin');
    }

    public function login(Request $request){
        $tes=$request->only('email','password');
        if(Auth::attempt($tes)){
            return redirect()->intended('/admin');
        }
        return redirect()->route('login')->with('error', 'Email atau password salah');
    }
    public function resep($id){
        $resep=resep::find($id);
        return view('resep',compact('resep'));
    }
    public function admin(){
        $dataresep=resep::count();
        $resepmasuk=resepmasuk::count();
        $resepkeluar=resepkeluar::count();

        return view('admin.dashboard',['data'=>$dataresep,'masuk'=>$resepmasuk,'keluar'=>$resepkeluar]);
    }

    public function dataresep(){
        $resep=resep::all();
        return view('admin.dataresep',compact('resep'));
    }

    public function resepmasuk(){
        $resep=resepmasuk::all();
        return view('admin.resepmasuk',compact('resep'));
    }

    public function resepkeluar(){
        $k=resepkeluar::all();
        return view('admin.resepkeluar',compact('k'));
    }

    public function tambahresep(){
        return view('admin.tambah');
    }

    public function tambahresepadmin(Request $request){
        $person = resep::create($request->except('foto'));

        $image = $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('gambar'),$image);
        $person->update(['foto' => $image]);

        return redirect()->route('dataresep');
    }

    public function update(Request $request,resep $resep){
        // Periksa apakah file telah diunggah
        if ($request->hasFile('foto')) {
            // Dapatkan nama asli file yang diunggah
            $image = $request->file('foto')->getClientOriginalName();
            // Pindahkan file yang diunggah ke direktori 'gambar'
            $request->file('foto')->move(public_path('gambar'), $image);
            // Perbarui kolom 'foto' dalam database
            $resep->update(['foto' => $image]);
        }

        // Perbarui kolom lainnya kecuali 'foto'
        $resep->update($request->except('foto'));
        // Redirect ke rute 'dataresep'
        return redirect()->route('dataresep');
    }

    public function hapusresepadmin(resep $resep){
        $resep->delete();
        return redirect()->route('dataresep');

    }

    public function editresepadmin(resep $resep){
        return view('admin.edit',compact('resep'));
    }

    public function tambahmasuk(Request $request){
        $person = resepmasuk::create($request->except('foto'));

        $image = $request->file('foto')->getClientOriginalName();
        $request->foto->move(public_path('gambar'),$image);
        $person->update(['foto' => $image]);
       
        // Alert::success('Sukses', 'Data berhasil diperbarui.');
        return redirect()->route('home');
        
    }
    

    public function terima($id){
        $data=resepmasuk::find($id);

        if($data){
            resep::create($data->toArray());
            $data->delete();
            return redirect()->back();
        }else {
        return redirect()->back();
        }
    }

    public function tolak($id){
        $data=resepmasuk::find($id);

        if($data){
            resepkeluar::create($data->toArray());
            $data->delete();
            return redirect()->back();
        }else {
        return redirect()->back();
        }
    }
    public function keluar($id){
        $data=resepkeluar::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function lihat($model,$id){

        if ($model == 'resep') {
            $data = resep::find($id);
        } elseif ($model == 'resepmasuk') {
            $data = resepmasuk::find($id);
        } elseif ($model == 'resepkeluar') {
            $data = resepkeluar::find($id);
        } else {
            abort(404); // Handle jika model tidak valid
        }
        
        return view('admin.lihatresep',compact('data'));

    }

    
}
