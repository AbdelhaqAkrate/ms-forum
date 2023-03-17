<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function getPosts()
    {
        $posts = Post::all();
        return response()->json($posts);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        //am using ajax to render the data dynamically so returning response as json format

        //validation to check if the fields are empty and if the data is correct
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //if validation fails return errors to the ajax request

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        //if validation passes then store the data in the database and store the image in folder so that it can be displayed later

        $image = $request->file('image')->store('images');
        $form_data = array(
            'title' => $request->title,
            'description' => $request->description,
            'image' => $new_name
        );
       $post = Post::create($form_data);
        return response::json($post);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

}
