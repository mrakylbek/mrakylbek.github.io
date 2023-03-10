<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $posts = Post::where('user_id', auth()->user()->id)->get(); // SELECT * FROM posts WHERE user_id=$id
        return view('home')->with(compact('posts'));
    }

    public function postStore(Request $request)
    {
        $extension = $request->file('photo')->extension();
        $fileName = time() . '.' . $extension;
        $request->file('photo')->storeAs('post', $fileName, 'public');
        $requestPhotoUrl = route('index') . '/storage/post/' . $fileName;
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'photo' => $requestPhotoUrl,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->back();
    }
}
