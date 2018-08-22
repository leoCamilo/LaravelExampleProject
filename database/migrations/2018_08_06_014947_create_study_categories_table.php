<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_url');
            $table->string('title');
            $table->timestamps();
        });

        DB::table('study_categories')->insert([
            ['title' => 'Direito Constitucional',   'img_url' => '/img/old_category/study_1.png'],
            ['title' => 'Direito do Trabalho',      'img_url' => '/img/old_category/study_2.png'],
            ['title' => 'Direito Civil',            'img_url' => '/img/old_category/study_3.png'],
            ['title' => 'Direito Penal',            'img_url' => '/img/old_category/study_4.png'],
            ['title' => 'Direito do Consumidor',    'img_url' => '/img/old_category/study_5.png'],
            ['title' => 'Direito Empresarial',      'img_url' => '/img/old_category/study_6.png'],
            ['title' => 'Direito Eleitoral',        'img_url' => '/img/old_category/study_7.png'],
            ['title' => 'Direito Administrativo',   'img_url' => '/img/old_category/study_8.png']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_categories');
    }
}
