<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class sousCategories extends Model
{
    use HasFactory;

    protected $fillable = ['nomSousCategorie', 'categorie_id'];

    public function Categories()
    { 
        return $this->belongsTo(Categories::class); 
    }
}
