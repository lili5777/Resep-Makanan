<div id="myModal" class="fixed inset-0 bg-gray-700 bg-opacity-50 flex items-center justify-center hidden">
    <!-- Modal Content -->
    <div class="bg-white p-8 rounded shadow-md">
        <h1 class="text-center font-bold">ISI RESEPMU</h1>
        <form method="post" action="{{ route('tambahmasuk') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div>
            <div class="flex gap-3">
                <div class="w-1/2">
                    <label for="">Nama Resep :</label><br>
                    <input type="text" class="border-2 rounded-md px-2" name="namaresep" required><br>
                </div>
                <div class="w-1/2">
                    <label for="">Nama Pembuat :</label><br>
                    <input type="text" class="border-2 rounded-md px-2" name="nama" required><br>
                </div>
            </div>
            <label for="">Deskripsi</label><br>
            <input type="text" class="border-2 rounded-md px-2 w-full" name="deskripsi" required><br>
            <label for="">Bahan :</label><br>
            <textarea name="bahan" id="" cols="30" rows="5" class="border-2 rounded-md px-2 w-full"
                required /></textarea><br>
            <label for="">Langkah-Langkah :</label><br>
            <textarea name="langkah" id="" cols="30" rows="5" class="border-2 rounded-md px-2 w-full"
                required /></textarea><br>
            <div class="flex gap-3">
                <div class="w-1/2">
                    <label for="">No Whatshap :</label><br>
                    <input type="number" class="border-2 rounded-md px-2" name="no" required><br>
                </div>
                <div class="w-1/2">
                    <label for="">Foto Makanan :</label><br>
                    <input type="file" class="border-2 rounded-md px-2 w-52" name="foto" required><br>
                </div>
            </div>

        </div>

        <!-- Tombol untuk menutup modal -->
        <button class="mt-4 bg-cyan-500 text-white px-4 py-2 rounded" type="submit">Kirim Resep</button>
        </form>
        <button id="closeModalButton" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Tutup Modal</button>
    </div>
</div>

<script>
    // Ambil elemen-elemen yang diperlukan
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('myModal');

    // Tambahkan event listener untuk membuka modal
    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    // Tambahkan event listener untuk menutup modal
    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>
