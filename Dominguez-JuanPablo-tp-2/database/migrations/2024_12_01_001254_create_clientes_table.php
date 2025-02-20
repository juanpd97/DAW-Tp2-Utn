<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('cuit',50)->unique()->notNullable();
            $table->string('condicionIva',50)->notNullable();
            $table->string('razonSocial',100)->notNullable();
            $table->date('alta')->notNullable();
            $table->string('direccion',255)->notNullable();
            $table->string('email',100)->notNullable();

            $table->timestamps();

        });
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
};
