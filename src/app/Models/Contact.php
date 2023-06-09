<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=[
        'fullname','gender','email',
        'postcode','address','building_name','opinion'
    ];
    public function gender()
    {
        return $this->belongsTo(Gender::class,'gender');
    }

    //public function gender() {
        //return $this->belongsTo('App\Models\Gender','gender_name');
        //return $this->belongsTo('App\Models\Gender', 'gender', 'gender_name');
        //return $this->belongsTo(Gender::class,'gender');
    //}
}
