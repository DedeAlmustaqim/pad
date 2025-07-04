<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $users =  DB::table('users')->get();
        $user = DB::table('users')->where('id', 5)->first();
        $data = [
            'title' => 'ini titile Dashboard',
            'users' => $users,
            'user' => $user
        ];
        return view('dashboard.index', $data);
    }

  
}