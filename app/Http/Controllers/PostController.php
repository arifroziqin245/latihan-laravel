<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in : ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by : ' . $author->username;
        }
        // ## MEMBUAT SEARCH DENGAN MODEL ##
        return view('posts', [
            "active" => 'posts',
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);

        //  #### MEMBUAT SEARCH DENGAN CONTROLLER ###
        // $posts = Post::latest();

        // if(request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //           ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        // return view('posts', [
        //     "active" => 'posts',
        //     "title" => "All Posts",
        //     "posts" => $posts->get()
        // ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
