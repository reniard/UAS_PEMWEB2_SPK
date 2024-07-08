@extends('layouts.user')

@section('title', 'Hasil Perhitungan WP')

@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Hasil Perhitungan WP
        </h1>
    </div>
</header>
<hr/>
<main>
    <div class="container mx-auto mt-5">
        <div class="flex justify-between mb-4">
            <h1 class="text-2xl font-bold">Data Nilai Akhir</h1>
        </div>
        
        <table class="table-auto w-full mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-center">ID</th>
                    <th class="px-4 py-2 text-center">Nama Alternatif</th>
                    <th class="px-4 py-2 text-center">Nilai S</th>
                    <th class="px-4 py-2 text-center">Nilai V</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternatifs as $alternatif)
                    <tr class="border-b">
                        <td class="px-4 py-2 text-center">{{ $alternatif->id }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->nama_alternatif }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->s }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->v }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3 class="text-2xl font-bold mt-8">Tabel Perangkingan (Berdasarkan Nilai V)</h3>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-center">Peringkat</th>
                    <th class="px-4 py-2 text-center">Nama Alternatif</th>
                    <th class="px-4 py-2 text-center">Nilai V</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // Sorting alternatifs berdasarkan nilai V dari besar ke kecil
                    $sortedAlternatifs = $alternatifs->sortByDesc('v');
                    $ranking = 1;
                @endphp
                @foreach ($sortedAlternatifs as $alternatif)
                    <tr class="border-b">
                        <td class="px-4 py-2 text-center">{{ $ranking }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->nama_alternatif }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->v }}</td>
                    </tr>
                    @php
                        $ranking++;
                    @endphp
                @endforeach
            </tbody>
        </table>

        {{-- Tombol untuk kembali ke halaman sebelumnya --}}
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Kembali ke Halaman Utama</a>
    </div>
</main>
@endsection
