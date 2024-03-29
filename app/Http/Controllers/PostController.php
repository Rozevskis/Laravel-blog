<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate data
        $this->validate($request, array(

            'title' => 'required | max:255',
            'body' => 'required'


        ));
        //store in the database
            $post = new Post;

            $post -> title = $request->title;
            $post->body = $request->body;

            
                $post->save();
            

        //redirect to another page

        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
