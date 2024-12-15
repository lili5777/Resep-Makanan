<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        /* Tambahkan gaya CSS untuk membuat perpindahan halus */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="bg-gradient-to-t from-cyan-500 to-[#1B4242] w-full">
        <div class="w-full pb-32 pt-64 text-white flex ">
            <div class="w-1/2 pl-20">
                <h1 class="text-4xl font-bold">Selamat Datang di Resep Rahasia Zaily</h1><br>
                <h1 class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nam delectus
                    incidunt reiciendis harum asperiores cupiditate pariatur nulla fuga fugiat architecto, vitae est,
                    corrupti quo. Numquam necessitatibus adipisci quisquam delectus.</h1>
                <h1 class="text-4xl font-bold mt-40" >AYO MULAI MEMASAK......</h1>
            </div>
            <div class="w-1/2 grid place-items-center">
                <img src="{{ asset('gambar/dash.png') }}" alt="" class="mt-[-80px]">
            </div>
        </div>
        <h1 class="text-center text-4xl font-bold text-white underline underline-offset-8 pb-7 " id="resepji">RESEP</h1>
        <div class="flex flex-wrap px-10 place-content-center gap-5 pb-5">
            @foreach ($data as $d)
                <a href="{{route('resep',$d->id)}}">
                    <div
                        class="bg-white w-80 h-96 rounded-2xl shadow-md p-2 hover:bg-slate-100 hover:w-[340px] hover:h-[410px]">
                        <img src="{{ asset('gambar/'.$d->foto) }}" alt="" class="rounded-2xl">
                        <h1 class="font-bold text-center text-2xl">{{$d->namaresep}}</h1>
                        <h1 class="text-center">{{$d->deskripsi}}</h1>
                    </div>
                </a>
            @endforeach


        </div>
    </div>

    @include('modal')

</body>

</html>
