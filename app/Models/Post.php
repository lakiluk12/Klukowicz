<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'imie', 'nazwisko', 'telefon', 'ulica',
        'miasto', 'kraj'
    ];

    protected $table = 'post';
    use HasFactory;
}
