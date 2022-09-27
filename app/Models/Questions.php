<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    public function biodata(){
        return $this->hasOne(Biodatas::class, 'username', 'username');
    }

    public function user(){
        return $this->hasOne(User::class, 'username', 'username');
    }
}
