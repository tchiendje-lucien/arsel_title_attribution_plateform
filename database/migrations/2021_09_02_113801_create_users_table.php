<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('ID_USER', true);
            $table->bigInteger('ID_ROLE')->index('I_FK_USERS_ROLES');
            $table->integer('ID_DPT')->index('I_FK_USERS_DEPARTEMENT');
            $table->string('USERNAME', 128);
            $table->char('EMAIL');
            $table->char('PASSWORD');
            $table->string('NOM', 128);
            $table->string('PRENOM', 128);
            $table->tinyInteger('ID_ADMIN')->nullable();
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
        Schema::dropIfExists('users');
    }
}
