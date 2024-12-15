<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @include('navbar')
    <div class="bg-gradient-to-t from-cyan-500 to-[#1B4242] w-full pt-36 pb-20">
        <h1 class=" text-center font-bold text-white text-2xl">
            RESEP MEMBUAT {{ $resep->namaresep }}</h1>
            <h1 class=" text-center font-bold text-gray-400">By {{$resep->nama}}</h1>
        <div class="grid place-items-center ">
            <img src="{{ asset('gambar/' . $resep->foto) }}" alt="" class="shadow-2xl w-[500px] my-10 rounded-2xl">
        </div>
        <div class="px-20 text-white">
            <h1 class="font-bold text-2xl">Bahan Yang Diperlukan :</h1>
            <h1 class="text-justify">
                {{ $resep->bahan }}
            </h1>
            <h1 class="font-bold text-2xl pt-10">Langkah-Langkah :</h1>
            <h1 class="text-justify">
                {{ $resep->langkah }}
            </h1>
        </div>


    </div>

    @include('modal')

</body>

</html>
