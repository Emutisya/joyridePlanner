<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class destinations extends Model
{
    protected $table= '_destinations';
    protected $fillable =['continent','country','city','currency','picture'];
}
