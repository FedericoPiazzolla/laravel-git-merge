<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cocktail extends Model
{
    use HasFactory;

    public function setNameAttribute($_value) {
        $this->attributes['name'] = $_value;
        $this->attributes['slug'] = Str::slug($_value);
    }
}
