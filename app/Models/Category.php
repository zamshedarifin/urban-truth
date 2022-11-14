<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $guarded =[];

    public function Admin()
    {
        return $this->belongsTo(Admin::class, 'created_by','id');
    }
}
