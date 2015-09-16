<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use View;
use App\Tweet;
use Input;
use Auth;

class TweetCtrl extends Controller
{
    public function store(){

        $tweet = new Tweet();
        $tweet->content = Input::get('content');
        $tweet->user_id = Auth::id();
        $tweet->save();

    	return redirect('/');
    }

    public function edit($id){
        return View::make('tweet_edit')->with(['tweet'=>Tweet::find($id)]);
    }

    public function update(Request $request, $id){

    	$tweet = Tweet::find($id);
    	$tweet->fill($request->all());
    	$tweet->save();

    	return redirect('/');
    }

    public function destroy($id){

    	$tweet = Tweet::find($id);
    	$tweet->delete();

    	return redirect('/');
    }
}
