<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();    
            $table->foreignId('producto_id')-> constrained();    //fk
            $table->foreignId('sucursal_id')-> constrained('sucursales');    //fk
            $table->unsignedInteger('cantidad');
            $table->unsignedInteger('precio');
            $table->tinyinteger('estado');
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
        Schema::dropIfExists('stocks');
    }
}
