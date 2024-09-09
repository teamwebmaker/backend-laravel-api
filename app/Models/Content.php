<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'title', 
        'description', 
        'picture', 
        'blog_id'
    ];

    public function dictionaries()
    {
        return $this->hasMany(Dictionary::class);
    }
}
