<?php 
class Inquest extends Eloquent{
   
   protected $table = 'form';

    protected $fillable = array('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17');

   public $errors;
    
    public function isValid($data)
    {
        $rules = array(
            'q1'   => 'required',
            'q2' => 'required',
        );
        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
    }

    public function deserted(){
        return $this->select(DB::raw('count(q1), q1'))->groupBy('q1');

    }
}
 ?>