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
            <h1 class="text-white font-bold text-2xl text-center py-10">TAMBAH RESEP</h1>

            <form method="post" action="{{ route('tambahresepadmin') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="px-10 w-full flex text-white">
                    <div class="w-1/2 ">
                        <label for="">Nama Resep :</label><br>
                        <input type="text" class="border-2 rounded-md px-2 w-[70%] mb-5 text-black" name="namaresep" required><br>
                        <label for="">Nama Pembuat :</label><br>
                        <input type="text" class="border-2 rounded-md px-2 w-[70%] mb-5 text-black" name="nama" required><br>
                        <label for="">No Whatshap :</label><br>
                        <input type="number" class="border-2 rounded-md px-2 w-[70%] mb-5 text-black" name="no" required><br>
                        <label for="">Foto Makanan :</label><br>
                        <input type="file" class="border-2 rounded-md px-2 w-[70%] mb-5 text-black" name="foto" required><br>
                        <div class="grid place-items-center">
                            <button class="mt-4 bg-cyan-500 text-white px-4 py-2 rounded w-64 shadow-lg"
                                type="submit">Tambah
                                Resep</button>
                        </div>

                    </div>

                    <div class="w-1/2 ">
                        <label for="">Deskripsi :</label><br>
                        <textarea name="deskripsi" id="" cols="30" rows="5" class="border-2 rounded-md px-2 w-full  text-black" required /></textarea><br>
                        <label for="">Bahan :</label><br>
                        <textarea name="bahan" id="" cols="30" rows="5" class="border-2 rounded-md px-2 w-full text-black" required /></textarea><br>
                        <label for="">Langkah-Langkah :</label><br>
                        <textarea name="langkah" id="" cols="30" rows="5" class="border-2 rounded-md px-2 w-full text-black" required/></textarea><br>
                    </div>
                  

                </div>

            </form>

        </div>
    </div>

</body>

</html>
