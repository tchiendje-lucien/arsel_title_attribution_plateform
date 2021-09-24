<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->foreign('ID_ARRONDISSELENT', 'FK_SITES_ARRONDISSEMENTS')->references('ID_ARRONDISSELENT')->on('arrondissements');
            $table->foreign('ID_CONCESSION', 'FK_SITES_REGIME_CONCESSION')->references('ID_CONCESSION')->on('regime_concession');
            $table->foreign('ID_LICENCE', 'FK_SITES_REGIME_LICENCE')->references('ID_LICENCE')->on('regime_licence');
            $table->foreign('ID_ACTIVITE', 'FK_SITES_REGINE_ACTIVITE')->references('ID_ACTIVITE')->on('regine_activite');
            $table->foreign('ID_SOURCE_ENR', 'FK_SITES_SOURCE_ENERGIE')->references('ID_SOURCE_ENR')->on('source_energie');
            $table->foreign('ID_EXPLOITANT', 'FK_SITES_TYPE_EXPLOITANT')->references('ID_EXPLOITANT')->on('type_exploitant');
            $table->foreign('ID_USER', 'FK_SITES_USERS')->references('ID_USER')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->dropForeign('FK_SITES_ARRONDISSEMENTS');
            $table->dropForeign('FK_SITES_REGIME_CONCESSION');
            $table->dropForeign('FK_SITES_REGIME_LICENCE');
            $table->dropForeign('FK_SITES_REGINE_ACTIVITE');
            $table->dropForeign('FK_SITES_SOURCE_ENERGIE');
            $table->dropForeign('FK_SITES_TYPE_EXPLOITANT');
            $table->dropForeign('FK_SITES_USERS');
        });
    }
}
