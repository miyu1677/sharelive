<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SharePostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}
