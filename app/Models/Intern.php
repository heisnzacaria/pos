<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $fillable = [
        'full_name ','cine','birthday','title','start_date','end_date','address'
     ];
}
