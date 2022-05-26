<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'title',
        'description',
        'short_description',
    ];

    // public function SubCategory()
    // {
    //  return $this->belongsTo(SubCategory::class);
    // }

    public function images()
    {
     return $this->hasMany(ProjectImage::class);
    }

   


    
}
