<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('value');
            $table->timestamps();
        });

        DB::table('plans')->insert([
            ['title' => 'plano mensal', 'value' => 'R$ 16,90'],
            ['title' => 'plano anual', 'value' => 'R$ 169,00']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
