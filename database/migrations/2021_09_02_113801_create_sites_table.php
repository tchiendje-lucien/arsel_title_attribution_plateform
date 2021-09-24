<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->integer('ID_SITE', true);
            $table->smallInteger('ID_LICENCE')->index('I_FK_SITES_REGIME_LICENCE');
            $table->integer('ID_CONCESSION')->index('I_FK_SITES_REGIME_CONCESSION');
            $table->integer('ID_ACTIVITE')->index('I_FK_SITES_REGINE_ACTIVITE');
            $table->integer('ID_USER')->index('I_FK_SITES_USERS');
            $table->integer('ID_ARRONDISSELENT')->index('I_FK_SITES_ARRONDISSEMENTS');
            $table->integer('ID_EXPLOITANT')->index('I_FK_SITES_TYPE_EXPLOITANT');
            $table->integer('ID_SOURCE_ENR')->index('I_FK_SITES_SOURCE_ENERGIE');
            $table->string('LIBELLE_SITE');
            $table->text('DESCRIPTION_SITE');
            $table->double('CAPACITE_SITE', 100, 2);
            $table->char('LICALITE_SITE');
            $table->dateTime('DATE_CREATE');
            $table->dateTime('DATE_UPDATE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
