<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'country',

        'city',
        'info',
        'address',
        'photo',
        'status',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id', 'id');
    }
}
