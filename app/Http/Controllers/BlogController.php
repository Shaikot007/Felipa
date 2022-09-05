<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
//    private $blogs;
//    private $blog;
//
//    public function index()
//    {
//        return view('admin.blog.add');
//    }
//
//    public function create(Request $request)
//    {
//        Blog::newBlog($request);
//        return redirect()->back()->with('message', 'Blog info create successfully');
//    }
//
//    public function manage()
//    {
//        $this->blogs = Blog::orderBy('id', 'desc')->get();
//        return view('admin.blog.manage', ['blogs' => $this->blogs]);
//    }
//
//    public function edit($id)
//    {
//        $this->blog = Blog::find($id);
//        return view('admin.blog.edit', ['blog' => $this->blog]);
//    }
//
//    public function update(Request $request, $id)
//    {
//        Blog::updateBlog($request, $id);
//        return redirect('/manage-blog')->with('message', 'Blog info update successfully');
//    }
//
//    public function delete(Request $request, $id)
//    {
//        Blog::deleteBlog($id);
//        return redirect('/manage-blog')->with('message', 'Blog info delete successfully');
//    }
}
