<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('ID_DPT', 'FK_USERS_DEPARTEMENT')->references('ID_DPT')->on('departement');
            $table->foreign('ID_ROLE', 'FK_USERS_ROLES')->references('ID_ROLE')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('FK_USERS_DEPARTEMENT');
            $table->dropForeign('FK_USERS_ROLES');
        });
    }
}
