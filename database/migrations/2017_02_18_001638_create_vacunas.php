<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunas', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('paciente_id')->unsigned()->nullable();
			//$table->foreign('paciente_id')->references('id')->on('pacientes');
			
			$table->boolean('enfermedades')->nullable();
			$table->text('hospitalizaciones')->nullable();
			$table->text('cirugias')->nullable();
			$table->text('traumatismos')->nullable();
			$table->text('alergicos')->nullable();
			$table->text('viajes')->nullable();
			
			$table->timestamps();
			$table->softDeletes();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
