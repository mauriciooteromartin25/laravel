<?php

namespace App\Http\Controllers;

use App\Models\UserMOM;
use App\Models\PostMOM;
use Illuminate\Http\Request;

class DashboardMOMController extends Controller
{
    public function index()
    {
        $users = UserMOM::with('posts')->get();
        $posts = PostMOM::with('user')->get();
        
        return view('dashboard-mom', compact('users', 'posts'));
    }
}
