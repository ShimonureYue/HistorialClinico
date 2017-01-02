<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nopatologicos extends Model {

	use SoftDeletes;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'antecedentes_no_patologicos';

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = true;

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id',
		'paciente_id',
		'nivel_socioeconomico',
		'vivienda_tipo',
		'vivienda_renta',
		'vivienda_agua',
		'vivienda_luz',
		'vivienda_drenaje',
		'vivienda_habitantes',
		'vivienda_habitaciones',
		'vivienda_zoonosis',
		'vivienda_plagas',
		'vivienda_hacinamiento',
		'vivienda_descripcion',
		'alimentacion_calidad',
		'alimentacion_descripcion',
		'alimentacion_intolerancia',
		'deportes_cuales',
		'deportes_frecuencia',
		'sueno_descripcion',
		'toxicomanias_alcohol',
		'toxicomanias_alcohol_inicio',
		'toxicomanias_alcohol_frecuencia',
		'toxicomanias_alcohol_descripcion',
		'toxicomanias_tabaco',
		'toxicomanias_tabaco_inicio',
		'toxicomanias_tabaco_frecuencia',
		'toxicomanias_tabaco_descripcion',
		'toxicomanias_drogas',
		'toxicomanias_drogas_inicio',
		'toxicomanias_drogas_frecuencia',
		'toxicomanias_drogas_descripcion',
		'deleted_at'
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
	];

	/**
	 * Relationi belongTo with Paciente
	 * 
	 * @return type
	 */
	public function paciente() {
		return $this->belongsTo('App\Models\Paciente');
	}

}
