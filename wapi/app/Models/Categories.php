<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sousCategories;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['nomCategorie'];

    public function SousCategories() 
    { 
        return $this->hasMany(sousCategories::class); 
    }
}
