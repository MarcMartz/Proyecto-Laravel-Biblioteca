<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    //relacion uno a muchos con books
    public function books()
    {
        return $this->hasMany(book::class);
    }
}
