@extends('layouts.admin')

@section('title', 'Data_Pengguna')

@section('content')
<div id="contentPembimbing1">
    <div class="flex justify-between mb-4 text-xl">
        <input type="text" placeholder="Cari..." class="border px-2 py-1 rounded w-1/3 text-xl">
        <button onclick="showModal('tambah-pengguna')" class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-2 py-2 rounded cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5" stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Tambah
        </button>
    </div>

    <table class="w-full bg-white rounded shadow text-left text-xl">
        <thead class="bg-gray-300">
            <tr>
                <th class="px-4 py-2 text-left">Id Karyawan</th>
                <th class="px-4 py-2 text-left">Nama Lengkap</th>
                <th class="px-4 py-2 text-left">Perusahaan</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Kontak</th>
                <th class="px-4 py-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-300">
                <td class="px-4 py-2 text-left">2219</td>
                <td class="px-4 py-2 text-left">Ahmad Saputra</td>
                <td class="px-4 py-2 text-left"> PT Teknologi Maju</td>
                <td class="px-4 py-2 text-left">ahmad@gmail.com</td>
                <td class="px-4 py-2 text-left">0897654321</td>
                <td class="px-4 py-2 text-left space-x-2 flex">
                    <button
                        class="flex items-center px-2 bg-blue-200 text-blue-500 rounded hover:bg-blue-300 cursor-pointer"
                        onclick="showModal('edit-pengguna')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </button>
                    <button onclick="showModal('hapus-pengguna')" class="px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- modal pembimbing perusahaan -->
<div id="modal-tambah-pengguna" class="hidden fixed inset-0 flex items-center justify-center z-50">
    <div class="bg-white w-1/3 p-5 border-2 rounded-lg shadow-lg relative">
        <h2 class="text-xl font-medium underline mb-1">Tambah Data Pembimbing Perusahaan</h2>
        <button
            onclick="hideModal('tambah-pengguna')"
            class="text-gray-500 hover:text-gray-700">
        </button>
        <div class="p-4">
            <form>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Id Karyawan</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Perusahaan</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full border rounded-lg px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Kontak</label>
                    <input type="kontak" class="w-full border rounded-lg px-3 py-2" />
                </div>
            </form>
        </div>
        <div class="text-xl p-4 border-t border-gray-200 flex justify-end space-x-2">
            <button
                onclick="hideModal('tambah-pengguna')"
                class="px-4 py-2 border rounded-lg hover:bg-gray-50 cursor-pointer">
                Batal
            </button>
            <button
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 cursor-pointer">
                Simpan
            </button>
        </div>
    </div>
</div>
<div id="modal-edit-pengguna" class="hidden fixed inset-0 flex items-center justify-center">
    <div class="bg-white w-1/3 p-5 rounded-lg border-2 shadow-lg relative">
        <h2 class="text-xl font-bold underline mb-4">Edit Data Pembimbing Perusahaan</h2>
        <div class="p-4">
            <form>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Id Karyawan</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Perusahaan</label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full border rounded-lg px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-xl font-medium text-gray-700 mb-1">Kontak</label>
                    <input type="kontak" class="w-full border rounded-lg px-3 py-2" />
                </div>
            </form>
        </div>
        <div class="text-xl p-4 border-t border-gray-200 flex justify-end space-x-2">
            <button onclick="hideModal('edit-pengguna')" class="px-4 py-2 border rounded-lg hover:bg-gray-50 cursor-pointer">Batal</button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 cursor-pointer">Simpan</button>
        </div>
    </div>
</div>
<div id="modal-hapus-pengguna" class="hidden fixed inset-0  flex items-center justify-center z-50">
    <div class="bg-white w-1/3 p-5 border-2 rounded-lg shadow-lg relative">
        <h2 class="text-xl font-bold mb-4 text-center underline">Hapus Pembimbing Perusahaan</h2>
        <p class="text-xl text-center mb-6">Apakah Anda yakin ingin menghapus Pembimbing Perusahaan ini?</p>
        <div class="text-xl flex justify-center space-x-4">
            <button onclick="hideModal('hapus-pengguna')" class="px-4 py-2 border rounded-lg hover:bg-gray-50 cursor-pointer">Batal</button>
            <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 cursor-pointer">Hapus</button>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan modal
    function showModal(modalId) {
        document.getElementById(`modal-${modalId}`).classList.remove("hidden");
    }

    // Fungsi untuk menyembunyikan modal
    function hideModal(modalId) {
        document.getElementById(`modal-${modalId}`).classList.add("hidden");
    }
</script>
@endsection