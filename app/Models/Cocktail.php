<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cocktail extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'glass', 'istruction','slug']; 
    public function setNameAttribute($_value) {
        $this->attributes['name'] = $_value;
        $this->attributes['slug'] = Str::slug($_value);
    }
}
