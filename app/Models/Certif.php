<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certif extends Model
{   public $timestamps = true;

    protected $fillable = [
        'full_name ','cine','birthday','title','start_date','end_date','address','created_at','updated_at'
     ];
}
