<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;
    protected $fillable = ['b_name','b_name','b_code','account_no','owner'];
}
