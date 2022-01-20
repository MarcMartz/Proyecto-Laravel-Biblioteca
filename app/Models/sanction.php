<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanction extends Model
{
    use HasFactory;

    //relacion uno a muchos con users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
