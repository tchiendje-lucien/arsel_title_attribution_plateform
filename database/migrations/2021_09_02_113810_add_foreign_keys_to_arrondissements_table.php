<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArrondissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arrondissements', function (Blueprint $table) {
            $table->foreign('ID_DEPARTEMENT', 'FK_ARRONDISSEMENTS_DEPARTEMENTS')->references('ID_DEPARTEMENT')->on('departements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arrondissements', function (Blueprint $table) {
            $table->dropForeign('FK_ARRONDISSEMENTS_DEPARTEMENTS');
        });
    }
}
