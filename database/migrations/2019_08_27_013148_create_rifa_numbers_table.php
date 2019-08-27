<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRifaNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rifa_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rifa_id')->unsigned();
            $table->foreign('rifa_id')
                  ->references('id')
                  ->on('rifas')
                  ->onDelete('cascade');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');    

            $table->integer('number');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('rifa_numbers');
    }

    public function setup()
    {
        for($x=0000;$x<1000;$x++) {
            DB::table('rifa_numbers')->insert([
                'rifa_id' => 1,
                'number' => $x,
                'status' => 0, 
            ]);
        }
    }
}
