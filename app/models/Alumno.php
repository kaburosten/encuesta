<?php 
class Alumno extends Eloquent{
	
    protected $table = 'alumnos';

    protected $fillable = array('alm_email','alm_fullname','alm_carrera','alm_materia','alm_genero','alm_maestro','alm_periodo','alm_code');

	public $errors;
    
    public function isValid($data)
    {
        $rules = array(
            'alm_email'	=> 'required|email|unique:alumnos',
            'alm_fullname' => 'required',
            'alm_carrera' => 'required',
            'alm_materia' => 'required',
            'alm_maestro' => 'required',
            'alm_periodo' => 'required',
        );

        if($this->exists){
            $rules['alm_email'] .=',alm_email,'.$this->id;
        }
        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
    }

    // public function deserted(){
    //     return $this->select(DB::raw('count(q1), q1'))->groupBy('q1');
    // }
}
 ?>