<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    protected $table= 'places';
    protected $fillable =['continent','country','city','currency'];
}
