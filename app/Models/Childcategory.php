<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Childcategory extends Model
{
    use HasSlug;

    protected $table = "child_categories";
    protected $guarded =[];


    public function admin()
    {
        return $this->belongsTo(Admin::class,'created_by','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }
    public function subCategory()
    {
        return $this->belongsTo(Subcategory::class,'sub_cat_id','id');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
