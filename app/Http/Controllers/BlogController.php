<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Http\request\Illuminate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();
        return view(
            'blog.index',
            compact('blogs')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string',
                'description' => 'required|string',
            ]
        );

        Blog::create($validator->validate());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        // dd($blog); -> ini untuk debug
        //process
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blogs = Blog::find($id);

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string',
                'description' => 'required|string',
            ]
        );

        //update date
        $blogs->update($validator->validate());

        return redirect('/blog');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
