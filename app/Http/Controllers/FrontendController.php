<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $blogs = Blog::take(3)->get(); // Fetch blogs with pagination

        return view('frontend.index', compact('blogs'));
    }
    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function gallery(){
        return view('frontend.gallery');
    }


    public function blog()
    {
        $blogs = Blog::all(); // Fetch blogs with pagination
        // dd($blogs);
        return view('frontend.blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.blog-detail', compact('blog', 'recentBlogs'));
    }
  
}
