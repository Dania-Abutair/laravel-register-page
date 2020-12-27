<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['email' , 'password', 'mobile','fullname'];
    protected $primaryKey='userid';

}
