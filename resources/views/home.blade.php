@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<header class="bg-gray shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center">
        <img class="h-41 w-41 rounded-full" src="{{ asset('storage/guambarr/reNiaCO.png') }}" alt="">
        <div class="ml-4">
            <h1 class="text-5xl font-bold text-yellow-400">
                Welcome To!
            </h1><br>            
            <h1 class="text-3xl font-bold text-gray-900">
                Sistem Pendukung Keputusan <br>
                Pemilihan Leader Shift Terbaik <br>
                Pada Perusahaan <span class="text-yellow-400">reNia Company</span>
            </h1>            
            <p class="text-lg text-gray-600 mt-2">
                Sistem Pendukung Keputusan (SPK) menggunakan Metode Weighted Product (WP)
                untuk menentukan team leader shift. <hr style="border-color: rgb(160, 160, 160);">
            </p>
            <p class="text-lg text-gray-600 mt-2">
                Dengan Mengikuti Prosedur Langkah-Langkah Sebagai Berikut : 
            </p>
            <ol class="list-decimal list-inside text-lg text-gray-600 mt-4">
                <li>Mengumpulkan para kandidat untuk di interview.</li>
                <li>Mencatat dan melihat penampilan kandidat yang sesuai untuk dijadikan team leader.</li>
                <li>Menganalisa secara manual satu per satu hasil interview dan dibandingkan dengan pengalaman kerja serta penampilan para kandidat.</li>
                <li>Dengan cara yang cukup sederhana tanpa adanya perhitungan yang akurat maka ditentukanlah team leader shift terbaik tersebut.</li>
            </ol>
        </div>
    </div>
    
</header>
<hr/>
<main>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Tabel Keterangan Nilai Kriteria
        </h1>
        <ul class="list-disc text-lg text-gray-600 mt-4">
            <li>Pengalaman Kerja</li>
            <li>Pelatihan Leader Shift</li>
            <li>Penampilan</li>
            <li>Wawasan</li>
            <li>Kejujuran</li>
        </ul>
    </div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <br>
                <h3 style="text-align: center;">Tabel Kriteria Pengalaman Kerja (C1) : </h3>
                <br>
                <div class="card">
                    <div class="card-header" style="padding: 10px; background-color: #f1f1f1; border-bottom: 1px solid #ccc;">
                    </div>
                    <div class="card-body" style="padding: 10px;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="background-color: #f9f9f9;">
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #60ff03dc; color: black; text-align: center;">Pengalaman Kerja (tahun)</th>
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #60ff03dc; color: black text-align: center;">Nilai Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1 tahun</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">2 tahun</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">2</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">3 tahun</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">3</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">4 tahun</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">4</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">≥ 5 tahun</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <br>
                <h3 style="text-align: center;">Pelatihan Leader Shift (C2) : </h3>
                <br>
                <div class="card">
                    <div class="card-header" style="padding: 10px; background-color: #f1f1f1; border-bottom: 1px solid #ccc;">
                    </div>
                    <div class="card-body" style="padding: 10px;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="background-color: #f9f9f9;">
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #007bff; color: black; text-align: center;">Pelatihan Leader Shift</th>
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #007bff; color: black text-align: center;">Nilai Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">6 Kali</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">7 Kali</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">2</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">8 Kali</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">3</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">9 Kali</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">4</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">> 9 kali</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <br>
                <h3 style="text-align: center;">Penampilan (C3) : </h3>
                <br>
                <div class="card">
                    <div class="card-header" style="padding: 10px; background-color: #f1f1f1; border-bottom: 1px solid #ccc;">
                    </div>
                    <div class="card-body" style="padding: 10px;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="background-color: #f9f9f9;">
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f06000; color: black; text-align: center;">Penampilan</th>
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #f06000; color: black text-align: center;">Nilai Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">Sangat Kurang Rapih</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">Kurang Rapih</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">2</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">Cukup Rapih</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">3</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">Rapih</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">4</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;"> Sangat Rapih</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <br>
                <h3 style="text-align: center;">Wawasan (C4) : </h3>
                <br>
                <div class="card">
                    <div class="card-header" style="padding: 10px; background-color: #f1f1f1; border-bottom: 1px solid #ccc;">
                    </div>
                    <div class="card-body" style="padding: 10px;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="background-color: #f9f9f9;">
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #fffb00; color: black; text-align: center;">Wawasan</th>
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #fffb00; color: black text-align: center;">Nilai Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">6 Jawaban Benar</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">7 Jawaban Benar</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">2</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">8 Jawaban Benar</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">3</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">9 Jawaban Benar</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">4</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;"> 10 Jawaban Benar</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <br>
                <h3 style="text-align: center;">Kejujuran (C5) : </h3>
                <br>
                <div class="card">
                    <div class="card-header" style="padding: 10px; background-color: #f1f1f1; border-bottom: 1px solid #ccc;">
                    </div>
                    <div class="card-body" style="padding: 10px;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="background-color: #f9f9f9;">
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #97978a; color: black; text-align: center;">Kejujuran</th>
                                    <th style="border: 1px solid #ddd; padding: 8px; background-color: #97978a; color: black text-align: center;">Nilai Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">Sangat Tidak Jujur</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">1</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">Tidak Jujur</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">2</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">Cukup</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">3</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">Jujur</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">4</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;"> Sangat Jujur</td>
                                    <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
