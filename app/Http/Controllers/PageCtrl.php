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

class PageCtrl extends Controller
{
   public function index(){

    	return View::make('home')->with([
    		'tweets'=>Tweet::all(),
    		'user' =>Auth::user()
    	]);
    }  
}
