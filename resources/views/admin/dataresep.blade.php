<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="w-full flex">
        @include('admin.slidebar')
        <div class="bg-gradient-to-t from-cyan-500 to-[#1B4242] w-full">
            <h1 class="text-white font-bold text-2xl text-center py-10">DATA RESEP</h1>
            <a href="{{ route('tambah') }}">
                <h1 class="bg-green-700 p-2 mb-2 ml-5 text-white rounded-md shadow-md hover:bg-green-800 w-32">Tambah Resep
                </h1>
            </a>
            <div class="flex justify-center px-5">
                <table class="min-w-full border border-gray-300 text-center text-white bg-[#1B4242]">
                    <tr class="border font-bold">
                        <td class="border w-[3%]">no</td>
                        <td class="border w-[13%]">Nama Resep</td>
                        <td class="border w-[14%]">Deskripsi</td>
                        <td class="border w-[15%]">Bahan</td>
                        <td class="border w-[15%]">Langkah</td>
                        <td class="border w-[10%]">No WA</td>
                        <td class="border w-[10%]">Pengirim</td>
                        <td class="border w-[10%]">Foto</td>
                        <td class="border w-[10%]">Aksi</td>
                    </tr>
                    @foreach ($resep as $key => $r)
                        <tr class="border">
                            <td class="border">{{ $key + 1 }}</td>
                            <td class="border">{{ $r->namaresep }}</td>
                            <td class="border">{{ Str::limit($r->deskripsi,50) }}</td>
                            <td class="border">{{ Str::limit($r->bahan,50) }}</td>
                            <td class="border">{{ Str::limit($r->langkah,50) }}</td>
                            <td class="border"><a href=" https://wa.me/{{ $r->no }}">{{ $r->no }}</a></td>
                            <td class="border">{{ $r->nama }}</td>
                            <td class="border"><img src="{{ asset('gambar/' . $r->foto) }}" alt=""></td>
                            <td class="border py-5">
                                <a href="{{route('lihat',['model'=>'resep','id'=>$r->id])}}" class="bg-green-400 hover:bg-green-500 px-4 rounded-md py-2 text-white shadow-md mb-5 my-5">Lihat</a><br><br>
                                <a href="{{route('edit',$r->id)}}" class="bg-yellow-400 hover:bg-yellow-500 px-5 rounded-md py-2 text-white shadow-md mb-5">Edit</a><br><br>
                                <form action="{{ route('hapusadmin', $r->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('delete')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 px-3 rounded-md py-2 text-white shadow-md">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

    {{-- @include('admin.modaledit')
    @include('admin.modaltambah') --}}



</body>

</html>
