<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
   protected $fillable =[
    'name','fname','mname','phone','email','dob','class_id','section','address','username','images','roll_no',
   ];
 
   public function class()
   {
      return $this->belongsTo(classes::class);
   }

   public function attendances()
    {
       return $this->hasMany(attendance::class);
    }
    public function result()
    {
       return $this->hasMany(result::class);
    }
    public function feerecorde()
    {
       return $this->hasMany(FeeRecord::class);
    }
   
}

