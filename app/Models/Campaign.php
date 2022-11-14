<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Campaign extends Model
{
    use HasFactory;
    
    public function list(){
        return DB::table('campaigns')
             ->leftjoin('maincats', 'maincats.id', '=', 'campaigns.category')
             ->join('admins', 'admins.id', '=', 'campaigns.created_by')
             ->select('campaigns.*','maincats.name as category_name','admins.name as admin_name')
             ->where('status',0)
             ->get();
    }
}
