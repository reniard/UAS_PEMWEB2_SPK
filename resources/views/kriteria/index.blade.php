@extends('layouts.user')

@section('title', 'Kriteria')

@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Tabel Kriteria
        </h1>
    </div>
</header>
<hr/>
<main>
    <div class="container mx-auto mt-5">
        <div class="flex justify-between mb-4">
            <h1 class="text-2xl font-bold">Data Kriteria</h1>
            <a href="{{ route('kriteria.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah Kriteria</a>
        </div>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-center">ID</th>
                    <th class="px-4 py-2 text-center">Nama Kriteria</th>
                    <th class="px-4 py-2 text-center">Bobot</th>
                    <th class="px-4 py-2 text-center">Created At</th>
                    <th class="px-4 py-2 text-center">Updated At</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kriterias as $item)
                    <tr class="border-b">
                        <td class="px-4 py-2 text-center">{{ $item->id }}</td>
                        <td class="px-4 py-2 text-center">{{ $item->nama_kriteria }}</td>
                        <td class="px-4 py-2 text-center">{{ $item->bobot }}</td>
                        <td class="px-4 py-2 text-center">{{ $item->created_at }}</td>
                        <td class="px-4 py-2 text-center">{{ $item->updated_at }}</td>
                        <td class="px-4 py-2 text-center">
                            <a href="{{ route('kriteria.edit', $item->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                            <form action="{{ route('kriteria.destroy', $item->id) }}" method="POST" class="inline">
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
