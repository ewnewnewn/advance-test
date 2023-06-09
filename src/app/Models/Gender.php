<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $guarded=array('id');

    public static $rules = array(
        'gender_name' => 'required',
    );

    public function contacts() 
    {
    return $this->hasMany('App\Models\Contact','gender_name');
    //return $this->hasMany(Contact::class,'gender');  
    }
}
