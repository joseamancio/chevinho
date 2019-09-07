<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('rifa_numbers', function (Blueprint $table) {
            $table->integer('cliente_id')->unsigned()->nullable()->after('user_id');
            $table->foreign('cliente_id')
                  ->references('id')
                  ->on('clientes')
                  ->onDelete('cascade');
        });

        $this->setup_data();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }

    public function setup_data()
    {
        $users = DB::table('users')->get();

        foreach($users as $user) {
            $rifa_numbers = DB::table('rifa_numbers')->where('user_id', $user->id)->get();

            $cliente = DB::table('clientes')->insertGetId([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
                'phone' => $user->phone
            ]);

            foreach ($rifa_numbers as $rifa) {
                $rifa->cliente_id = $cliente;
            }
        }
    }
}
