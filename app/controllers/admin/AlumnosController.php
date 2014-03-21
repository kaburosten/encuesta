<?php

class Admin_AlumnosController extends \BaseController {

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      $alumnos = Alumno::paginate(10);
        return View::make('admin/alumnos/list')->with('alumnos', $alumnos);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
        $alumno = new Alumno;
        $materias = DB::table('materia')->select(DB::raw('mat_clave, mat_nombre'))->orderBy('mat_clave','asc')->get();
        $selectedMaterias = array('0'=>'Elegir materias');
		foreach($materias as $materia) {
			$selectedMaterias[$materia->mat_clave] = '['.$materia->mat_clave.'] '.$materia->mat_nombre;
		}
        
        return View::make('admin/alumnos/form')->with('alumno', $alumno)->with('materias',$selectedMaterias);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
      $alumno = new Alumno;
        // Obtenemos la data enviada por el usuario
        $data = Input::all();
        
        // Revisamos si la data es válido
        if ($alumno->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $alumno->fill($data);
            // Guardamos el usuario
            $alumno->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            return Redirect::route('admin.alumnos.index');
        }
        else
        {
            // En caso de error regresa a la acción create con los datos y los errores encontrados
         return Redirect::route('admin.alumnos.create')->withInput()->withErrors($alumno->errors);
        }
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
      //
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
      $alumno = Alumno::find($id);
         return View::make('admin/alumnos/form')->with('alumno', $alumno);
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
      $alumno = Alumno::find($id);
        
        // Si el usuario no existe entonces lanzamos un error 404 :(
        if (is_null ($alumno))
        {
            App::abort(404);
        }
        
        // Obtenemos la data enviada por el usuario
        $data = Input::all();
        
        // Revisamos si la data es válido
        if ($alumno->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $alumno->fill($data);
            // Guardamos el usuario
            $alumno->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            return Redirect::to('/admin/alumnos');
        }
        else
        {
            // En caso de error regresa a la acción edit con los datos y los errores encontrados
            return Redirect::route('admin.alumnos.edit', $alumno->id)->withInput()->withErrors($alumno->errors);
        }

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
      $alumno = Alumno::find($id);
        
        if (is_null ($alumno))
        {
            App::abort(404);
        }
        
        $alumno->delete();

        return Redirect::route('admin.alumnos.index');

   }

   public function enviarMails(){
      $periodo = Input::get('periodo');
      $alumnos = Alumno::all();

      foreach ($alumnos->toArray() as $alumno) {
         
         Mail::send('emails.encuesta', array('alumno' => $alumno), function ($message) use ($alumno){
             $message->subject('Aqui va el mensaje del asunto del email ');
             $message->to($alumno['alm_email']);
         });
      }

   }

}