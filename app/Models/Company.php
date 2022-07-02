<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model

{

    public $timestamps = true;

    protected $fillable = [
        'name ','responsable','rc','patent','if','ice','phone','address','ville','created_at','updated_at'
     ];
}
