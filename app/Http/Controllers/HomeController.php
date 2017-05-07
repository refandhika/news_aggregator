<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Thujohn\Twitter\Facades\Twitter;
	
class HomeController extends Controller
{
    
    public function HomeTimeline(){
    	$Tweetsdata = json_decode(Twitter::getHomeTimeline(['count' => 20, 'format' => 'json']));
        
        return $Tweetsdata;
    }

    public function FormPostTweet(){
    	return view('FormPostTweet');
    }

    public function PostTweet(Request $request){
    	$tweet = $request->input('tweet');

    	Twitter::postTweet(['status' => $tweet, 'format' => 'json']);

    	return redirect('/hometimeline');
    }
}
