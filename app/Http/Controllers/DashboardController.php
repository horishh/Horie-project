<?php

namespace App\Http\Controllers;

use App\Models\Post;

class DashboardController extends Controller
{
    public function view()
    {
        $user = auth()->user();

        // Select * users WHERE user_id = 5;
        $posts = Post::where('user_id', $user->id)
            ->orderBy('updated_at', 'DESC')
            ->get();

        return view('dashboard.index', compact('posts'));
    }
}
