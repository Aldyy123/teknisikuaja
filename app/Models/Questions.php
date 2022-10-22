<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Questions extends Model
{
    use HasFactory, Searchable;

    public function biodata(){
        return $this->hasOne(Biodatas::class, 'username', 'username');
    }

    public function user(){
        return $this->hasOne(User::class, 'username', 'username');
    }
}
