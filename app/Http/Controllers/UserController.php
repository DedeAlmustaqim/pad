<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{


    public function index()
    {
        $data = [
            'title' => 'Kelola User'
        ];
        return view('user.index', $data);
    }
}