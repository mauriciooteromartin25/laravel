<?php

namespace App\Http\Controllers;

use App\Models\MOUser;
use App\Models\MOPost;
use Illuminate\Http\Request;

class MOMPostController extends Controller
{
    
    public function allUsersWithPosts()
    {
        $users = MOUser::with('posts')->get();
        return view('MOmposts.all-users', compact('users'));
    }
    
    public function userPosts($userId)
    {
        $user = MOUser::with('posts')->findOrFail($userId);
        return view('MOmposts.user-posts', compact('user'));
    }

    public function usersWithPosts()
    {
        $users = MOUser::whereHas('posts')->with('posts')->get();
        return view('MOmposts.users-with-posts', compact('users'));
    }

    public function postsWithAuthors()
    {
        $posts = MOPost::with('user')->get();
        return view('MOmposts.posts-with-authors', compact('posts'));
    }

    public function publishedPosts()
    {
        $posts = MOPost::where('is_published', true)
                     ->with('user')
                     ->orderBy('published_at', 'desc')
                     ->get();
        return view('MOmposts.published-posts', compact('posts'));
    }
}
