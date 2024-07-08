@extends('layouts.user')

@section('title', 'Alternatif')

@section('contents')
<header class="bg-white shadow">
    
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Tabel Alternatif
        </h1>
    </div>
</header>
<hr/>
<main>

    <div class="container mx-auto mt-5">
        <div class="flex justify-between mb-4">
            <h1 class="text-2xl font-bold">Data Alternatif</h1>
            <a href="{{ route('alternatif.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah Alternatif</a>
        </div>
        
        <table class="table-auto w-full mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-center">ID</th>
                    <th class="px-4 py-2 text-center">Nama Alternatif</th>
                    <th class="px-4 py-2 text-center">Nilai C1</th>
                    <th class="px-4 py-2 text-center">Nilai C2</th>
                    <th class="px-4 py-2 text-center">Nilai C3</th>
                    <th class="px-4 py-2 text-center">Nilai C4</th>
                    <th class="px-4 py-2 text-center">Nilai C5</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternatifs as $alternatif)
                    <tr class="border-b">
                        <td class="px-4 py-2 text-center">{{ $alternatif->id }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->nama_alternatif }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->nilai_c1 }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->nilai_c2 }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->nilai_c3 }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->nilai_c4 }}</td>
                        <td class="px-4 py-2 text-center">{{ $alternatif->nilai_c5 }}</td>
                        <td class="px-4 py-2 text-center">
                            <a href="{{ route('alternatif.edit', $alternatif->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                            <form action="{{ route('alternatif.destroy', $alternatif->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Tombol untuk kembali ke halaman sebelumnya --}}
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Kembali ke Halaman Utama</a>
    </div>
</main>
@endsection
