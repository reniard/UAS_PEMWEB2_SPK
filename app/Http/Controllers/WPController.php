<?php

// File: app/Http/Controllers/WPController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Support\Facades\DB;

class WPController extends Controller
{
    public function calculateWP()
    {
        try {
            // Ambil data alternatif dan kriteria
            $alternatifs = Alternatif::all();
            $kriterias = Kriteria::all();

            // Hitung jumlah total bobot
            $totalBobot = $kriterias->sum('bobot');

            // Validasi total bobot
            if ($totalBobot <= 0) {
                throw new \Exception('Total bobot kriteria tidak valid.');
            }

            // Array untuk menyimpan nilai S
            $nilaiS = [];

            // Lakukan perhitungan WP
            foreach ($alternatifs as $alternatif) {
                $s = 1; // Inisialisasi dengan 1 karena akan dikalikan

                // Hitung nilai S untuk alternatif saat ini
                foreach ($kriterias as $kriteria) {
                    // Pastikan nilai kriteria tidak nol
                    $nilaiKriteria = $alternatif->{"nilai_c".$kriteria->id};
                    
                    if ($nilaiKriteria == 0) {
                        throw new \Exception('Nilai kriteria tidak boleh nol.');
                    }

                    // Normalisasi bobot kriteria
                    $normalisasiBobot = $kriteria->bobot / $totalBobot;

                    // Pangkatkan nilai kriteria alternatif dengan bobot normalisasi
                    $s *= pow($nilaiKriteria, $normalisasiBobot);
                }

                // Simpan nilai S dalam array
                $nilaiS[$alternatif->id] = $s;
            }

            // Hitung total nilai S untuk semua alternatif
            $totalS = array_sum($nilaiS);

            // Validasi total S
            if ($totalS <= 0) {
                throw new \Exception('Total nilai S tidak valid.');
            }

            // Hitung nilai V untuk setiap alternatif
            foreach ($alternatifs as $alternatif) {
                $alternatif->s = $nilaiS[$alternatif->id];
                $alternatif->v = $nilaiS[$alternatif->id] / $totalS;
                $alternatif->save();
            }

            // Kirim data alternatif dan kriteria ke view perhitungan.index
            return view('perhitungan.index', [
                'alternatifs' => $alternatifs,
                'kriterias' => $kriterias,
            ]);

        } catch (\Exception $e) {
            // Handle error secara efektif
            return redirect()->back()->with('error', 'Terjadi kesalahan: '.$e->getMessage());
        }
    }
}
