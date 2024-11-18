<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
