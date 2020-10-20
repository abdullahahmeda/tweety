<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => current_user()->timeline()
        ]);
    }   
    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);
        $tweet = Tweet::create([
            'user_id' => current_user()->id,
            'body' => $attributes['body']
        ]);

        if (request()->session()->has('uploaded_files')) {
            $uploadedFiles = session('uploaded_files');

            foreach ($uploadedFiles as $file) {
                $image = new Image();
                $image->tweet_id = $tweet->id;
                $image->path = $file;
                $image->save();
            }
            session([ 'uploaded_files' => [] ]);
        }

        return redirect()->route('home');
    }

    public function upload()
    {
        $uploadedFiles = session('uploaded_files', []);

        $file = request('file')->store('images');
        $uploadedFiles[] = $file;
        session(['uploaded_files' => $uploadedFiles]);
        
        return session('uploaded_files');
    }
}
