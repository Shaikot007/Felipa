<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FelipaController extends Controller
{
    private $blogs;

    public function index()
    {
        return view('front.home.home');
    }

    public function about()
    {
        return view('front.about.about');
    }

    public function portfolio()
    {
        return view('front.portfolio.portfolio');
    }

    public function blog()
    {
        $this->blogs = Blog::orderBy('id', 'desc')->get();
        return view('front.blog.blog', ['blogs' => $this->blogs]);
    }

    public function blogSingle()
    {
        return view('front.blog-single.blog-single');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }
}
