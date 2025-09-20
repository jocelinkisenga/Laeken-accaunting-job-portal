<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

protected $fillable = [
    'user_id',
    'boulot_id',
    'cv',
    'description',
    'confirm'
];

protected $casts = [
    'confirm' => 'boolean',
];

public function boulot () {
    return $this->belongsTo(Boulot::class);
}

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
