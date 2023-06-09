<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)
                    ->withPivot('quantity');
    }
    
    public function translations()
    {
        return $this->hasMany(MealTranslation::class);
    }
}
