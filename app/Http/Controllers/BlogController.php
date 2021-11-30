<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(5);

        return view('pages.blog',["blogs"=>$blogs]);
    }

    public function blogDetails($slug)
    {
        $blog = Blog::find($slug);

        return view('pages.show', ["blog"=>$blog]);
    }
}
