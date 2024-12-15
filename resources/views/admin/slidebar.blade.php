<div class="bg-[#092635] w-1/4   pb-96 shadow-md">
    <div class="grid place-items-center mt-5">
        <img src="{{ asset('gambar/zaily.png') }}" alt="" class="w-32">
        <div class="w-48 h-px bg-gray-300 my-4"></div>
    </div>
    <h1 class="text-white font-bold pl-10 hover:text-cyan-600 mb-5 hover:pl-14"><a
            href="{{ route('admin') }}">Dashboar</a></h1>
    <h1 class="text-white font-bold pl-10 hover:text-cyan-600 mb-5 hover:pl-14""><a href="{{ route('dataresep') }}">Data
            Resep</a></h1>
    <h1 class="text-white font-bold pl-10 hover:text-cyan-600 mb-5 hover:pl-14""><a
            href="{{ route('resepmasuk') }}">Resep Masuk</a></h1>
    <h1 class="text-white font-bold pl-10 hover:text-cyan-600 mb-5 hover:pl-14""><a
            href="{{ route('resepkeluar') }}">Resep Keluar</a></h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="text-white font-bold pl-10 hover:text-cyan-600 mb-5 hover:pl-14">Logout</button>
    </form>



</div>
