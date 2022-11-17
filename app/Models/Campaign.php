<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Campaign extends Model
{
    use HasSlug;

    protected $table = "campaigns";
    protected $guarded =[];

    public function list(){
        return DB::table('campaigns')
             ->leftjoin('categories', 'categories.id', '=', 'campaigns.category')
             ->join('admins', 'admins.id', '=', 'campaigns.created_by')
             ->select('campaigns.*','categories.name as category_name','admins.name as admin_name')
             ->where('status',0)
             ->get();
    }


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
