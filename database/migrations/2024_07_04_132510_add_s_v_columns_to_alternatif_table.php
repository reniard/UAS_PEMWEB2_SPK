<?php

// File: database/migrations/YYYY_MM_DD_HHmmSS_add_s_v_columns_to_alternatif_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSVColumnsToAlternatifTable extends Migration
{
    public function up()
    {
        Schema::table('alternatif', function (Blueprint $table) {
            $table->float('s')->default(0); // Kolom untuk nilai S
            $table->float('v')->default(0); // Kolom untuk nilai V
        });
    }

    public function down()
    {
        Schema::table('alternatif', function (Blueprint $table) {
            $table->dropColumn('s');
            $table->dropColumn('v');
        });
    }
}
