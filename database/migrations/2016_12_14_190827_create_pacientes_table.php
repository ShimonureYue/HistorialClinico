<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('pacientes', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('a_paterno');
			$table->string('a_materno')->nullable();
			$table->date('fecha_nacimiento')->nullable();
			$table->string('curp')->nullable();
			$table->string('estado_civil')->nullable();
			$table->string('nivel_socioeconomico')->nullable();
			$table->string('tipo_sanguineo')->nullable();
			//$table->string('discapacidad')->nullable();
			$table->string('grupo_etnico')->nullable();
			$table->string('religion')->nullable();
			$table->string('url_foto')->nullable();
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
		Schema::dropIfExists('pacientes');
	}

}
