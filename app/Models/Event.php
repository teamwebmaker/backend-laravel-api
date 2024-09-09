<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'title', 
        'description', 
        'place', 
        'image', 
        'start_date', 
        'start_time', 
        'visible'
    ];
}
