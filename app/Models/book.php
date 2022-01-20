<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    //relacion muchos a muchos con users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    //relacion muchos a muchos con autores
    public function authors()
    {
        return $this->belongsToMany(author::class);
    }
    

    //relacion muchos a muchos con status
    public function status()
    {
        return $this->belongsToMany(status::class);
    }

    //relacion uno a muchos con category
    public function category()
    {
        return $this->belongsTo(category::class);
    }


}

