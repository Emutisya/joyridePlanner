<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class providers extends Model
{
    protected $table= 'providers';
    protected $fillable =['OwnerN','Phone','ServiceN','Description'];
  
}
