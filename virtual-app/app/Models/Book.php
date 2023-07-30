<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    public function Author() : BelongsTo {
        return $this->belongsTo(Author::class);
    }
    
    protected $fillable = [
        'Name',
        'ISBN',
        'Author',
    ];
    
    use HasFactory;
}
