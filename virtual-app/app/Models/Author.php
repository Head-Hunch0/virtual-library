<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{

    public function Book() : HasMany {
        return $this->hasMany(Book::class);
    }
    use HasFactory;
}
