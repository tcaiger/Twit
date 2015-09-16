<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use View;
use App\Tweet;
use App\User;
use Input;
use Auth;

class UserCtrl extends Controller
{

    public function show($id){

        // load the user we are about to view
        $user = User::find($id);

        // set up the following var
        // assume we are not following them to begin with
        $following = false;

        // for each user that is following this person
        foreach($user->followers as $follower){
            // is one of those people me?
            if(Auth::user()->id == $follower->id){
                // if so, then we ARE following them
                $following = true;
            }
        }

       return view('user', [
            'user'=> $user,
            'following'=> $following
        ]);
    } 


	public function create(){
    	return View::make('register');
    }
    
	public function store(Request $request){
    	$user = new User();

    	$user->name 	= $request->get('name');
    	$user->email 	= $request->get('email');
    	$user->password = Hash::make($request->get('password'));

    	$user->save();
    	
    	return redirect('/');
    }

    public function login(){
    	return View::make('login');
    }

    public function authenticate(Request $request){
        $formdata = $request->only('email', 'password');

    	$success = Auth::attempt($formdata);

        if($success){
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
    	Auth::logout();

        return redirect('/login');
    }

    // Follow a user
    public function follow($id){
        Auth::user()->following()->attach($id);

        return redirect('/user/'.$id);
    }

    // Stop following a user
    public function unfollow($id){
        Auth::user()->following()->dettach($id);

        return redirect('/user/'.User::id());
    }

    //  View a list of users you are following
    public function following($id){


    }

    // View a list of user that are following you
    public function followers($id){

    }


}
