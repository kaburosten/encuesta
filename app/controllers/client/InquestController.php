<?php

class Client_InquestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'esto debe estar vacio';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($code)
	{
		$alumno = Alumno::where('alm_code','=',$code)->where('alm_status','=','PENDIENTE')->get();
		if($alumno->count() > 0){
			return View::make('client/inquest/form')->with('alumno',$alumno[0]);	
		}else{
			return 'Usted ya contestó esta encuesta';
		}
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inquest = new Inquest;
		$data = Input::all();
		if ($inquest->isValid($data))
		{
			$inquest->fill($data);
			$inquest->save();
			$alumno = Alumno::find(Input::get('alm_id'));
			$alumno->alm_status = 'CONTESTADA';
			$alumno->save();
			return Redirect::route('client.inquest.show', array($inquest->id));
		}

		return Redirect::route('client.inquest.create')->withInput()->withErrors($inquest->errors);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return 'aqui los agradecimientos'. $id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}