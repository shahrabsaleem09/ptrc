<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $fillable = [
        'sr_no', 'post_name', 'job_id', 'job_fee','description', 'department', 'ad_date', 'close_date', 
    ];
    
}
