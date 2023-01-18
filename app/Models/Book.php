<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'cover',
        'isbn',
        'writer',
        'publisher',
        'synopsis',
        'categorybook_id',
        'downloaded',
    ];
}
