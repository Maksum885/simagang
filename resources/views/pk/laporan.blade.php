@extends('layouts.dashboard-pk')

@section('content')
<div>
    <h1 class="text-2xl font-bold mb-5 underline">Laporan Peserta Magang</h1>

    <div class="flex items-center justify-between mb-5">
        <div class="flex items-center gap-2">
            <input type="text" placeholder="Cari Laporan..." class="border rounded px-3 py-2 text-sm">
        </div>
    </div>

    <table class="w-full bg-white rounded shadow">
        <thead class="bg-gray-300">
            <tr>
                <th class="px-4 py-2 text-left">Nama Mahasiswa</th>
                <th class="px-4 py-2 text-left">Judul Laporan</th>
                <th class="px-4 py-2 text-left">Tanggal Unggah</th>
                <th class="px-4 py-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-300">
                <td class="px-4 py-2">Muhammad Ali Maksum</td>
                <td class="px-4 py-2">Laporan Minggu Ke-2</td>
                <td class="px-4 py-2">26 Apr 2025</td>
                <td class="px-4 py-2">
                    <button class="text-blue-600 hover:text-blue-800 cursor-pointer flex items-center gap-1" onclick="openModal('modal-detail')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Detail
                    </button>
                </td>
            </tr>
            <tr class="border-b border-gray-300">
                <td class="px-4 py-2">Nur Alfi Syahrin</td>
                <td class="px-4 py-2">Laporan Minggu Ke-2</td>
                <td class="px-4 py-2">25 Apr 2025</td>
                <td class="px-4 py-2">
                    <button class="text-blue-600 hover:text-blue-800 cursor-pointer flex items-center gap-1" onclick="openModal('modal-detail')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Detail
                    </button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Modal Detail Laporan Magang -->
    <div id="modal-detail" class="fixed inset-0 z-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-xl border-2 shadow-lg p-6 w-full max-w-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold underline">Detail Laporan Magang</h2>
                <button onclick="closeModal('modal-detail')" class="text-gray-500 hover:text-gray-700 cursor-pointer">&times;</button>
            </div>

            <div class="text-sm space-y-2">
                <p><strong>Nama Pemagang:</strong> Muhammad Ali Maksum</p>
                <p><strong>Judul:</strong> Laporan Minggu Ke-2</p>
                <p><strong>Tanggal Unggah:</strong> 26 Apr 2025</p>
                <p><strong>Status:</strong> Selesai</p>
                <p><strong>Deskripsi:</strong> Laporan ini berisi dokumentasi pengerjaan desain ER-Diagram.</p>
                <p><strong>File:</strong> <a href="#" class="text-blue-600 hover:underline">laporan-minggu-ke-2.pdf</a></p>
            </div>
        </div>
    </div>

</div>

<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }
</script>
@endsection