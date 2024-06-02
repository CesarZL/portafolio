<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'title_en', 'abstract', 'abstract_en', 'image', 'content', 'content_en', 'category_id'];
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    //send the name of the category to the view
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
