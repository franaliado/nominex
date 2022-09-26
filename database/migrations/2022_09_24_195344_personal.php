<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 8)->unique();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('sexo', 1);
            $table->string('dependencia', 100);
            $table->date('fec_ingreso');
            $table->boolean('estado')->default(1);
            $table->string('nivel_acad', 150);
            $table->string('rango_acad', 150);
            $table->integer('hijos');
            $table->string('phone')->nullable();;
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('personal');
    }
}
