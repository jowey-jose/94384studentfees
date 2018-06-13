<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{

    //Table Name
    protected $table = 'fees';
    //Primary Key
    public $primaryKey ='id';
    //Timestamp
    public $timestamps = true;

    public function students(){
        return $this->belongsTomany('App/Student');
    }
}
