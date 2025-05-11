@extends('layouts.admin')

@section('title', 'Beranda')

@section('content')
<h1 class="text-4xl font-medium font-serif mb-5">Selamat Datang, Admin!</h1>
<div class="grid grid-cols-1 md:grid-cols-3 gap-15 mb-8 p-6 bg-white rounded border">
    <div class="bg-blue-100 hover:bg-blue-200 cursor-pointer rounded p-6 text-center border border-blue-300">
        <h2 class="text-4xl font-bold text-blue-800">10</h2>
        <p class="text-xl">Pembimbing Perusahaan</p>
    </div>

    <div class="bg-yellow-100 hover:bg-yellow-200 cursor-pointer rounded p-6 text-center border border-yellow-300">
        <h2 class="text-4xl font-bold text-yellow-900">10</h2>
        <p class="text-xl">Pembimbing Kampus</p>
    </div>

    <div class="bg-green-100 hover:bg-green-200 cursor-pointer rounded p-6 text-center border border-gray-300">
        <h2 class="text-4xl font-bold text-green-900">36</h2>
        <p class="text-xl">Mahasiwa</p>
    </div>
</div>
<div class="bg-white border rounded p-5 text-2xl">
    <h2 class="font-semibold mb-3 text-gray-700 underline underline-offset-1">Aktivitas Terbaru</h2>
    <table class="w-full text-xl table-auto">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left text-gray-800">Aktivitas</th>
                <th class="px-6 py-3 text-left text-gray-800">Pengguna</th>
                <th class="px-6 py-3 text-left text-gray-800">Waktu</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-t">
                <td class="px-6 py-3">Melakukan Login</td>
                <td class="px-6 py-3">Muhammad Ali Maksum</td>
                <td class="px-6 py-3">32 menit yang lalu</td>
            </tr>
            <tr class="border-t">
                <td class="px-6 py-3">Melakukan Login</td>
                <td class="px-6 py-3">Ahmad Saputra</td>
                <td class="px-6 py-3">1 jam yang lalu</td>
            </tr>
            <tr class="border-t">
                <td class="px-6 py-3">Melakukan Login</td>
                <td class="px-6 py-3">Budi Santoso</td>
                <td class="px-6 py-3">2 jam yang lalu</td>
            </tr>
            <tr class="border-t">
                <td class="px-6 py-3">Melakukan Login</td>
                <td class="px-6 py-3">Nur Alfi Syahrin</td>
                <td class="px-6 py-3">3 jam yang lalu</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection