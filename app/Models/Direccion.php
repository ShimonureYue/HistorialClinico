<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direccion extends Model
{
    use SoftDeletes;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'direcciones';

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
		'calle',
		'num_exterior',
		'num_interior',
		'estado_id',
		'municipio_id',
		'localidad_id',
		'colonia',
		'codigo_postal',
		'telefono',
		'celular',		
		'deleted_at',
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
	public function paciente()
    {
        return $this->belongsTo('App\Models\Paciente');
    }

}
