<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alternatifs', function (Blueprint $table) {
            // $table->id();
            $table->integer('idcandidat');
            $table->string('nama',100);
            $table->enum('gender',['L'],['P']);
            $table->float('nilaic1', 8, 2);
            $table->float('nilaic2', 8, 2);
            $table->float('nilaic3', 8, 2);
            $table->float('nilaic4', 8, 2);
            $table->float('nilaic5', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};
