<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name','last_name','course','year','email','password'];
    //Table Name
    protected $table = 'students';
    //Primary Key
    public $primaryKey ='id';
    //Timestamp
    public $timestamps = true;

    public function feespayments(){
        return $this->hasMany('App/Fess');
    }
}
