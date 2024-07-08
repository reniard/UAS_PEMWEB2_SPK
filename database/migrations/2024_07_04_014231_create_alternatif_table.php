<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAlternatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatif', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alternatif', 50);
            $table->integer('nilai_c1');
            $table->integer('nilai_c2');
            $table->integer('nilai_c3');
            $table->integer('nilai_c4');
            $table->integer('nilai_c5');
            $table->timestamps(); // Optional: timestamps untuk created_at dan updated_at
        });

        // Menyisipkan data awal
        DB::table('alternatif')->insert([
            [
                'id' => 1,
                'nama_alternatif' => 'Galaksi Aldebaran',
                'nilai_c1' => 4,
                'nilai_c2' => 5,
                'nilai_c3' => 2,
                'nilai_c4' => 4,
                'nilai_c5' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama_alternatif' => 'Kejora Ayodya',
                'nilai_c1' => 3,
                'nilai_c2' => 3,
                'nilai_c3' => 4,
                'nilai_c4' => 2,
                'nilai_c5' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nama_alternatif' => 'Jihan Halana',
                'nilai_c1' => 1,
                'nilai_c2' => 2,
                'nilai_c3' => 4,
                'nilai_c4' => 2,
                'nilai_c5' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nama_alternatif' => 'Septian Aian Nugroho',
                'nilai_c1' => 3,
                'nilai_c2' => 1,
                'nilai_c3' => 5,
                'nilai_c4' => 4,
                'nilai_c5' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'nama_alternatif' => 'Calvin Raskara',
                'nilai_c1' => 2,
                'nilai_c2' => 5,
                'nilai_c3' => 3,
                'nilai_c4' => 3,
                'nilai_c5' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'nama_alternatif' => 'Oriana Suri Laksita',
                'nilai_c1' => 2,
                'nilai_c2' => 4,
                'nilai_c3' => 2,
                'nilai_c4' => 2,
                'nilai_c5' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'nama_alternatif' => 'Sebastian Dawala',
                'nilai_c1' => 5,
                'nilai_c2' => 2,
                'nilai_c3' => 3,
                'nilai_c4' => 5,
                'nilai_c5' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatif');
    }
}
