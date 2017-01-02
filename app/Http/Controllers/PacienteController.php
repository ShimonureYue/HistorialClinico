<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Direccion;
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

		$pacientes = Paciente::paginate(env('DEFAULT_PAGINATION'));
		return view('paciente.index', ['pacientes' => $pacientes]);
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
	 * Show or edit the form for creating or updatingresource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create_update($id = null) {
		if ($id) {
			$paciente = Paciente::with('direccion')->findOrFail($id);
			return view('paciente.create_update')->with('paciente', $paciente);
		}
		return view('paciente.create_update');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {


		$validator = Validator::make($request->all()
						, [
					'nombre' => 'required',
						], [
					'nombre.required' => 'El nombre es obligatorio'
						]
		);
		Flash::success('Paciente registrado con éxito');
		if ($validator->fails()) {
			if ($request->ajax()) {
				return response()->json(array(
							'status' => 'error',
							'message' => 'Error in validation form',
							'data' => $validator->messages()
								), 400);
			} else {
				return redirect('paciente/create')->withErrors($validator)->withInput();
			}
		}
		//var_dump($request->all());

		$paciente = Paciente::updateOrCreate(array('id' => $request->id), $request->all());
		//$paciente->save();

		if ($request->ajax()) {
			return response()->json(
							array(
						'status' => 'success',
						'message' => 'Ficha de identificación, creada con éxito.',
						'data' => array(
							'paciente_id' => $paciente->id
						)
							), 201);
		} else {
			Flash::success('Paciente registrado con éxito');
			return redirect(route('paciente.index'));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store_with_relations(Request $request) {
		$validator = Validator::make($request->all()
						, [
					'nombre' => 'required',
						], [
					'nombre.required' => 'El nombre es obligatorio'
						]
		);
		if ($validator->fails()) {
			return redirect('paciente.create_update')->withErrors($validator)->withInput();
		}

		$paciente = Paciente::updateOrCreate(array('id' => $request->id), $request->all());
		$direccion = Direccion::updateOrCreate(array('paciente_id' => $paciente->id), $request->direccion);

		Flash::success('Información guardada con éxito');
		return redirect(route('paciente.create_update', ['id' => $paciente->id]));


		//dd($request->all());
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
	/*
	  public function destroy($id) {


	  $paciente = Paciente::find($id);

	  $paciente->delete();


	  }
	 * 
	 */


	public function destroy($id) {
		//echo $id;
		return response()->json(['Hola mundo', $id]);
	}

}
