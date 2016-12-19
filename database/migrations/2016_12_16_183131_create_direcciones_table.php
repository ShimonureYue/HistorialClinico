<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('direcciones', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('paciente_id')->unsigned()->nullable();
			$table->foreign('paciente_id')->references('id')->on('pacientes');
			$table->string('calle')->nullable();
			$table->string('num_exterior')->nullable();
			$table->string('num_interior')->nullable();
			$table->integer('estado_id')->unsigned()->nullable();
			$table->integer('municipio_id')->unsigned()->nullable();
			$table->integer('localidad_id')->unsigned()->nullable();
			$table->string('colonia')->nullable();
			$table->string('codigo_postal')->nullable();
			$table->string('telefono')->nullable();
			$table->string('celular')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('direcciones');
	}

}
