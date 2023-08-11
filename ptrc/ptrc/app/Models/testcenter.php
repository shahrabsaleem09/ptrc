<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testcenter extends Model
{
    use HasFactory;
    protected $table='centers';
    protected $fillable = ['name','address','date_time','start_time','end_time'];
}
