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
        <div class="bg-gradient-to-t from-cyan-500 to-[#1B4242] w-full flex flex-wrap place-content-center gap-10">
            <div class="bg-sky-900 h-40 py-4 px-16 rounded-xl shadow-lg">
                <h1 class="text-white text-2xl text-center font-bold">Data Resep</h1>
                <h1 class="text-white text-8xl text-center font-bold">{{$data}}</h1>
            </div>
            <div class="bg-sky-900 h-40 py-4 px-16 rounded-xl shadow-lg">
                <h1 class="text-white text-2xl text-center font-bold">Resep Masuk</h1>
                <h1 class="text-white text-8xl text-center font-bold">{{$masuk}}</h1>
            </div>
            <div class="bg-sky-900 h-40 py-4 px-16 rounded-xl shadow-lg">
                <h1 class="text-white text-2xl text-center font-bold">Resep Keluar</h1>
                <h1 class="text-white text-8xl text-center font-bold">{{$keluar}}</h1>
            </div>
        </div>
    </div>


</body>

</html>
