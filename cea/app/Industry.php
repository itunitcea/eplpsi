<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model{
    
    protected $table = 'industry';
    protected $primaryKey = 'industryID';
    public $timestamps = false; // timestamp who are the save person date time
    
        /**
     * Get the author that wrote the book.
     */
    public function district()
    {	
        return  District::find($this->districtcode);
    }

    public function category()
    {
        if($this->eplcategoryid!=0){
            $cat = Epl_Category::where('idno',$this->eplcategoryid)->get()[0];

            return $cat;
        }else{
            return array("attributes"=>array("categoryID"=>"No"));
        }
    }

    public function localauthority()
    {
        return  District::find($this->lacode);
    }
}


