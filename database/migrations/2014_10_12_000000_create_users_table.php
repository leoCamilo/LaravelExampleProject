<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('remember_token')->default('');
            $table->boolean('premium')->default(false);
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'email' => 'admin',
                'name' => 'administrator',
                'password' => '$2a$12$MLsI9mXL8KPG2t2jO/ya6Oq.qau0bxNkx84B46tq7DlNDXA9UpBZm'   // admin
            )
        );
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
