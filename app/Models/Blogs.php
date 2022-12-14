<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Blogs extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'description',
        'username',
        'slug',
        'image'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'username', 'username');
    }
}
