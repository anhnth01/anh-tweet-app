<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;




class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $tweets 
        // = Tweet::all();
        // dd($tweets);
        // return view('tweet.index')
        //     ->with('name', 'laravel')
        //     ->with('version', '8');

        $tweets = Tweet::all();
        $tweets = Tweet::orderBy('created_at','DESC')->get();
        return view('tweet.index')
        ->with('tweets', $tweets);    
    }
}
