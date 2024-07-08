<!-- resources/views/alternatif/edit.blade.php -->
@extends('layouts.user')

@section('title', 'Edit Alternatif')

@section('contents')
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Edit Alternatif</h1>
            <a class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded-md" href="{{ route('alternatif.index') }}"> Kembali</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger bg-red-100 text-red-700 p-4 rounded-md mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('alternatif.update', $alternatif->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama_alternatif" class="block text-sm font-medium text-gray-700">Nama Alternatif</label>
                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nama_alternatif" name="nama_alternatif" value="{{ $alternatif->nama_alternatif }}" required>
            </div>

            <div class="mb-4">
                <label for="nilai_c1" class="block text-sm font-medium text-gray-700">Nilai C1</label>
                <input type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nilai_c1" name="nilai_c1" value="{{ $alternatif->nilai_c1 }}" required>
            </div>

            <div class="mb-4">
                <label for="nilai_c2" class="block text-sm font-medium text-gray-700">Nilai C2</label>
                <input type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nilai_c2" name="nilai_c2" value="{{ $alternatif->nilai_c2 }}" required>
            </div>

            <div class="mb-4">
                <label for="nilai_c3" class="block text-sm font-medium text-gray-700">Nilai C3</label>
                <input type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nilai_c3" name="nilai_c3" value="{{ $alternatif->nilai_c3 }}" required>
            </div>

            <div class="mb-4">
                <label for="nilai_c4" class="block text-sm font-medium text-gray-700">Nilai C4</label>
                <input type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nilai_c4" name="nilai_c4" value="{{ $alternatif->nilai_c4 }}" required>
            </div>

            <div class="mb-4">
                <label for="nilai_c5" class="block text-sm font-medium text-gray-700">Nilai C5</label>
                <input type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nilai_c5" name="nilai_c5" value="{{ $alternatif->nilai_c5 }}" required>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
            </div>
        </form>
    </div>
@endsection
