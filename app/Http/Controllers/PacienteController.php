<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Flash;

class PacienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('paciente.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('paciente.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$paciente = new Paciente;

		$validator = Validator::make($request->all()
						, [
					'nombre' => 'required',
						], [
					'nombre.required' => 'El nombre es obligatorio'
						]
		);

		if ($validator->fails()) {
			return redirect('paciente/create')
							->withErrors($validator)
							->withInput();
		}

		$paciente->nombre = $request->nombre;
		$paciente->a_paterno = $request->a_paterno;
		$paciente->a_materno = $request->a_materno;
		$paciente->fecha_nacimiento = $request->fecha_nacimiento;

		$paciente->save();
		Flash::success('Paciente registrado con éxito');

		return redirect(route('paciente.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

}
