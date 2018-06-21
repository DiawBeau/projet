<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adherant;
use App\User;

use DB;

class UserController extends Controller
{
    public function index()
    {
    	if (auth()->guest()) {
			return redirect('/home')->withErrors([
				'email' => "Vous devez être connecté pour voir cette page.",
			]);
		}
		else{
    	$users  = User::all();
        return view('user.index',compact('users'));
    }
}





}
