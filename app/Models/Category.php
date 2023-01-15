<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [

        'name',
        'father',
        'status',
    ];

    public function cfather()
    {
        return $this->belongsTo(Category::class, 'father', 'id');
    }
}
