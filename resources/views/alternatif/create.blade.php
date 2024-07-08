@extends('layouts.user')

@section('title', 'Tambah Alternatif')

@section('contents')
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Tambah Alternatif</h1>
                   
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-white shadow-md rounded-lg border-2 border-gray-300">
            <div class="p-4">
                <h1 class="text-2xl font-bold text-gray-900">
                    <mark>! Ketentuan Pemberian Nilai !</mark>
                </h1>
                <ul class="list-disc text-lg text-gray-600 mt-4">
                    <li>(C1) Pengalaman Kerja</li>
                    <li>(C2) Pelatihan Leader Shift</li>
                    <li>(C3) Penampilan</li>
                    <li>(C4) Wawasan</li>
                    <li>(C5) Kejujuran</li>
                </ul>
                <ul class="list-disc text-lg text-gray-600 mt-4">
                    <li>1 = Sangat Rendah </li>
                    <li>2 = Rendah </li>
                    <li>3 = Cukup</li>
                    <li>4 = Baik</li>
                    <li>5 = Sangat Baik</li>
                </ul>
            </div>
        </div>

        @if ($errors->any())
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 mt-4">
                Ada kesalahan input:
            </div>
            <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('alternatif.store') }}" method="POST" class="mt-4">
            @csrf

            <div class="mb-4">
                <label for="nama_alternatif" class="block text-gray-700 text-sm font-bold mb-2">Nama Alternatif:</label>
                <input type="text" name="nama_alternatif" id="nama_alternatif" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nama_alternatif') }}">
            </div>

            <div class="mb-4">
                <label for="nilai_c1" class="block text-gray-700 text-sm font-bold mb-2">Nilai C1:</label>
                <input type="number" name="nilai_c1" id="nilai_c1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nilai_c1') }}">
            </div>

            <div class="mb-4">
                <label for="nilai_c2" class="block text-gray-700 text-sm font-bold mb-2">Nilai C2:</label>
                <input type="number" name="nilai_c2" id="nilai_c2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nilai_c2') }}">
            </div>

            <div class="mb-4">
                <label for="nilai_c3" class="block text-gray-700 text-sm font-bold mb-2">Nilai C3:</label>
                <input type="number" name="nilai_c3" id="nilai_c3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nilai_c3') }}">
            </div>

            <div class="mb-4">
                <label for="nilai_c4" class="block text-gray-700 text-sm font-bold mb-2">Nilai C4:</label>
                <input type="number" name="nilai_c4" id="nilai_c4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nilai_c4') }}">
            </div>

            <div class="mb-4">
                <label for="nilai_c5" class="block text-gray-700 text-sm font-bold mb-2">Nilai C5:</label>
                <input type="number" name="nilai_c5" id="nilai_c5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('nilai_c5') }}">
            </div>

            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
                <a href="{{ route('alternatif.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Kembali
                </a>
            </div>
        </form>
    </div>
@endsection
