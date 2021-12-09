<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return "index Function";

        

        $pageTitle = "Hello";

        $posts = auth()->user()->posts;


        
        //dd($pageTitle);

        return view('admin.post.index', compact('posts', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $pageTitle = 'Create Post';
        

        return view('admin.post.index', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'title' => 'required|unique:posts',
                'body' => 'required',
            ]
        );
        
        //dd($request->all());
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->user_id = auth()->id();
        // $post->save();

        //dd($post);

        $data = $request->all();

        $data['user_id'] = auth()->id();

        Post::create($data);


        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dashboard()
    {
        

        return view('admin.dashboard');

    }
    public function userCreate(Request $request)
    {
        

        

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if (auth()->user()->hasRole('superadmin')){

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            $user->attachRole($request->role);    
        }
        else
            'not allowed';

        

        return redirect()->route('laratrust.roles.index');

    }

    public function userView()
    {


        return view('admin.users.view');

    }
}
