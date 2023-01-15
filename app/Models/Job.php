<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $fillable = [
        'company_id',
        'category_id',
        'title',
        'phone',
        'content',

        'city',
        'salary',
        'country',

        'end_at',
        'status',
    ];
}
