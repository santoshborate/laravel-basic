<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Backend\PostService;

class PostController extends Controller
{
    /**
     * @var $postService
     */
    private $postService;

    /**
     * PostController constructor.
     *
     * @param App/Services/Backend/PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Find all post list
        $posts = $this->postService->paginate(3);

        return view('post.list', ['posts' => $posts])->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'content' => 'required',
        ]);

        // Create new post
        $this->postService->create($request->all());
        
        return redirect()->route('post.index')->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get post data by id
        $post = $this->postService->find($id);

        return view('post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get post data by id
        $post = $this->postService->find($id);

        // Load form view
        return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate post data
        $this->validate($request, [
            'name' => 'required',
            'content' => 'required'
        ]);

        // Get post data
        $postData = $request->all();

        // Update post data
        $this->postService->update($id, $postData);

        return redirect()->route('post.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete post data
        $this->postService->delete($id);

        return redirect()->route('post.index')->with('success','Post deleted successfully');
    }
}
