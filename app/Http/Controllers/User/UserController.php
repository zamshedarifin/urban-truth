<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PacketRequisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
       return "dashboard";
    }

}
