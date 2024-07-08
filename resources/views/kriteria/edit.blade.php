<!-- resources/views/kriteria/edit.blade.php -->
@extends('layouts.user')

@section('title', 'Edit Kriteria')

@section('contents')
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Edit Kriteria</h1>
            <a class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded-md" href="{{ route('kriteria.index') }}"> Kembali</a>
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

        <form action="{{ route('kriteria.update', $kriterium->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama_kriteria" class="block text-sm font-medium text-gray-700">Nama Kriteria</label>
                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="nama_kriteria" name="nama_kriteria" value="{{ $kriterium->nama_kriteria }}">
            </div>

            <div class="mb-4">
                <label for="bobot" class="block text-sm font-medium text-gray-700">Bobot</label>
                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="bobot" name="bobot" value="{{ $kriterium->bobot }}">
            </div>

            <div class="flex justify-center">
                <button type="submit" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
            </div>
        </form>
    </div>
@endsection
