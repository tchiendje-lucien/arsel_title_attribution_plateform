<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemanderTitreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demander_titre', function (Blueprint $table) {
            $table->integer('ID_DEMANDE', true);
            $table->integer('ID_USER')->index('I_FK_DEMANDER_TITRE_USERS');
            $table->integer('ID_SITE')->index('I_FK_DEMANDER_TITRE_SITES');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demander_titre');
    }
}
