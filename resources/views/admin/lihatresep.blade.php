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
            <h1 class="text-white font-bold text-2xl text-center pt-10">Resep {{ $data->namaresep }}</h1>

            {{-- <h1 class="text-white font-bold text-2xl text-center pt-10">Resep {{ $data->namaresep }}</h1> --}}
            <h1 class="text-gray-400 font-bold  text-center ">{{ $data->nama }}</h1>
            <div class="text-white px-5 grid place-items-center">
            <img src="{{ asset('gambar/' . $data->foto) }}" alt=""
                class="shadow-2xl w-[500px] my-10 rounded-2xl">
            <h1 class="font-bold">Deskripsi</h1>
            <h1>{{ $data->deskripsi }}</h1><br>
            <h1 class="font-bold">BAHAN</h1>
            <h1>{{ $data->bahan }}</h1><br>
            <h1 class="font-bold">Langkah</h1>
            <h1>{{ $data->langkah }}</h1><br>
            <h1 class="font-bold">No whatshap</h1>
            <h1>{{ $data->no }}</h1><br>

            </div>


        </div>
    </div>

</body>

</html>
