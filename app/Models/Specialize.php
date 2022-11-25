<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialize extends Model
{
    use HasFactory;

    protected $table = 'Specialize';
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'id',
        'email'
    ];

    protected $casts = [
        'id' => 'int',
        'email' => 'string'
    ];
}
