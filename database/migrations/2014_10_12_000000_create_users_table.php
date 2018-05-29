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
            $table->boolean('premium')->default(false);
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'email' => 'AndreGomesAdmin',
                'name' => 'AndreGomesAdmin',
                'password' => '$2y$10$unSBNNasod3Ab3IrZgUDJuV7Usvvorot6Lra1OnF8fWlS3CLeQgMi'   // AndreGomesAdmin
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
