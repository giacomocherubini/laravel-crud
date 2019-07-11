<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateLaptopsTable extends Migration
{

    public function up()
    {
        Schema::table('laptops', function (Blueprint $table) {
            $table->string('Modello')->after('Marca');
        });
    }


    public function down()
    {
        Schema::table('laptops', function (Blueprint $table) {
            $table->dropColumn('Modello');
        });
    }
}
