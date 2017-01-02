<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesNoPatologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_no_patologicos', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('paciente_id')->unsigned()->nullable();
			//$table->foreign('paciente_id')->references('id')->on('pacientes');
			
			$table->string('nivel_socioeconomico')->nullable();
			$table->string('vivienda_tipo')->nullable();
			$table->string('vivienda_renta')->nullable();
			$table->string('vivienda_agua')->nullable();
			$table->string('vivienda_luz')->nullable();
			$table->string('vivienda_drenaje')->nullable();
			$table->integer('vivienda_habitantes')->nullable();
			$table->integer('vivienda_habitaciones')->nullable();
			$table->string('vivienda_zoonosis')->nullable();
			$table->string('vivienda_plagas')->nullable();
			$table->string('vivienda_hacinamiento')->nullable();
			$table->string('vivienda_descripcion')->nullable();
			
			$table->string('alimentacion_calidad')->nullable();
			$table->string('alimentacion_descripcion')->nullable();
			$table->string('alimentacion_intolerancia')->nullable();
			
			$table->string('deportes_cuales')->nullable();
			$table->string('deportes_frecuencia')->nullable();
			
			$table->string('sueno_descripcion')->nullable();
			
			$table->string('toxicomanias_alcohol')->nullable();
			$table->string('toxicomanias_alcohol_inicio')->nullable();
			$table->string('toxicomanias_alcohol_frecuencia')->nullable();
			$table->string('toxicomanias_alcohol_descripcion')->nullable();
			$table->string('toxicomanias_tabaco')->nullable();
			$table->string('toxicomanias_tabaco_inicio')->nullable();
			$table->string('toxicomanias_tabaco_frecuencia')->nullable();
			$table->string('toxicomanias_tabaco_descripcion')->nullable();
			$table->string('toxicomanias_drogas')->nullable();
			$table->string('toxicomanias_drogas_inicio')->nullable();
			$table->string('toxicomanias_drogas_frecuencia')->nullable();
			$table->string('toxicomanias_drogas_descripcion')->nullable();
			
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
        Schema::dropIfExists('antecedentes_no_patologicos');
    }
}

