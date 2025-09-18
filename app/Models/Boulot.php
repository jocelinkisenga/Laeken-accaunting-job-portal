<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boulot extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'title',
    'description',
    'due_date',
    'done',
    'published',
        'type'
];

protected $casts = [
    'done' => 'boolean',
];

}