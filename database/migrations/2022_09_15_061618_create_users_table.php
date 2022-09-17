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
            $table->increments('id');
            $table->string('name',255);
        });

        DB::table('users')->insert(
            array(
                'name' => 'stefan'
            ));
        DB::table('users')->insert(
            array(
                'name' => 'Mikhail'
            ));
        DB::table('users')->insert(
            array(
                'name' => 'MANFRED'
            ));
        DB::table('users')->insert(
            array(
                'name' => 'luKAS'
            ));
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
