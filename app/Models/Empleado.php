<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'empleados';

    protected $fillable = ['name','email','phone'];

}
