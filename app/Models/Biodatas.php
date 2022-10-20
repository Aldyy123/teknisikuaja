<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Biodatas extends Model
{
    use HasFactory, Searchable;

    public function users(){
        return $this->hasOne(User::class, 'username', 'username');
    }
}
