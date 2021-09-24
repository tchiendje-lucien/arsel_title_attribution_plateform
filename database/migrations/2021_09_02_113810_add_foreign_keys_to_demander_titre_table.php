<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDemanderTitreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demander_titre', function (Blueprint $table) {
            $table->foreign('ID_SITE', 'FK_DEMANDER_TITRE_SITES')->references('ID_SITE')->on('sites');
            $table->foreign('ID_USER', 'FK_DEMANDER_TITRE_USERS')->references('ID_USER')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demander_titre', function (Blueprint $table) {
            $table->dropForeign('FK_DEMANDER_TITRE_SITES');
            $table->dropForeign('FK_DEMANDER_TITRE_USERS');
        });
    }
}
