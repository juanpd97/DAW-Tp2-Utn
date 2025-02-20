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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();

            $table->string('tipoComprobante',50)->unique()->notNull();
            $table->integer('puntoVenta');
            $table->string('numeroComprobante',50);
            $table->string('cuitCliente',50);
            $table->foreign('cuitCliente')->references('cuit')->on('clientes')->onDelete('cascade'); //hay que eliminar en cascada? (-_-?
            $table->decimal('importe',10,2);

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
        Schema::dropIfExists('ventas');
    }
};
