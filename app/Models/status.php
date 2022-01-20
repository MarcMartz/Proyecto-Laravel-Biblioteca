<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    //relacion muchos a muchos con books
    public function books()
    {
        return $this->belongsToMany(book::class);
    }
}
