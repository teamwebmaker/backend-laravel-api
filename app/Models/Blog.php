<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'title', 
        'description', 
        'topic', 
        'image', 
        'created_date', 
        'visible'
    ];
    
    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
