<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rifas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        $this->setup();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rifas');
    }

    public function setup()
    {
        DB::table('rifas')->insert([
            'name' => 'Chevinho',
            'description' => "Carro em perfeito estado, ano 1980. Possui placa preta a mais de 5 anos",
        ]);
    }
}
