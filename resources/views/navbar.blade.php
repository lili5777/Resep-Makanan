<nav class="bg-[#092635] w-full flex justify-around py-6 fixed top-0 place-items-center">
    <img src="{{ asset('gambar/zaily.png') }}" alt="logo" class="w-36">
    <ul class="flex gap-8 text-[20px]">
        <li class="text-white font-bold hover:text-[#9EC8B9]"><a href="{{ route('home') }}">Beranda</a></li>
        @if (request()->is('resep'))
        @else
            <li class="text-white font-bold hover:text-[#9EC8B9]"><a href="{{ route('home','#resepji') }}">Resep</a></li>
        @endif
        <li class="text-white font-bold hover:text-[#9EC8B9]"><button id="openModalButton">Unggah Resepmu</button></li>
    </ul>
    <div class="flex gap-2">
        <form action="{{route('home','#resepji')}}" method="GET">
        <input type="text" name="search" id="" class="h-10 rounded-2xl px-4" placeholder="Cari Resepmu">
        <button type="submit" class="bg-cyan-300 py-2 px-4 rounded-xl text-slate-800 hover:bg-cyan-500">Cari</button>
        </form>
    </div>
</nav>
