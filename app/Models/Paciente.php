<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model {

	use SoftDeletes;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'pacientes';

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
		'nombre',
		'a_paterno',
		'a_materno',
		'fecha_nacimiento',
		'curp',
		'genero',
		'estado_civil',
		'nivel_socioeconomico',
		'tipo_vivienda',
		'renta_propia',
		'tipo_sanguineo',		
		'grupo_etnico',
		'religion',
		'deleted_at',
	];
	
	/**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
		'a_paterno' => 'string',
		'a_materno' => 'string',
		'fecha_nacimiento' => 'date',
		'estado_civil' => 'string',
		'tipo_sanguineo' => 'string',
		'grupo_etnico' => 'string',
		'religion' => 'string',
        'deleted_at' => 'datetime'
    ];
	
	/**
	 * Relation OneToOne with Dirección
	 * 
	 * @return relation
	 */
	public function direccion()
    {
        return $this->hasOne('App\Models\Direccion');
    }
	
	/**
	 * Relation OneToOne with Antecedentes no Patologicos
	 * 
	 * @return relation
	 */
	public function antecedentes_no_patologicos()
    {
        return $this->hasOne('App\Models\Nopatologicos');
    }

}
