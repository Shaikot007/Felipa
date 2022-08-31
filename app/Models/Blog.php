<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use HasFactory;

    private static $blog;
    private static $thumbnail;
    private static $thumbnailName;
    private static $directory;
    private static $extension;
    private static $thumbnailUrl;

    public static function getThumbnailUrl($request)
    {
        self::$thumbnail = $request->file('thumbnail');
        if(self::$thumbnail)
        {
            self::$extension = self::$thumbnail->getClientOriginalExtension();
            self::$thumbnailName = time().'.'.self::$extension;
            self::$directory = 'images/blog-thumbnails/';
            self::$thumbnail->move(self::$directory, self::$thumbnailName);
            return self::$directory.self::$thumbnailName;
        }
        else {
            return '';
        }
    }

    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->name                = Auth::user()->name;
        self::$blog->title               = $request->title;
        self::$blog->thumbnail           = self::getThumbnailUrl($request);
        self::$blog->description         = $request->description;
        self::$blog->save();
        return self::$blog;
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);

        self::$thumbnail = $request->file('thumbnail');
        if(self::$thumbnail)
        {
            if(file_exists(self::$blog->thumbnail))
            {
                unlink(self::$blog->thumbnail);
            }
            self::$thumbnailUrl = self::getThumbnailUrl($request);
        }
        else
        {
            self::$thumbnailUrl = self::$blog->thumbnail;
        }

        self::$blog->name                = Auth::user()->name;
        self::$blog->title               = $request->title;
        self::$blog->thumbnail           = self::$thumbnailUrl;
        self::$blog->description         = $request->description;
        self::$blog->save();
    }

    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if(file_exists(self::$blog->thumbnail))
        {
            unlink(self::$blog->thumbnail);
        }
        self::$blog->delete();
    }
}
