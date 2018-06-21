<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
	public function create()
	{
		if (auth()->guest()) {
			return redirect('/home')->withErrors([
				'email' => "Vous devez être connecté pour voir cette page.",
			]);
		}
		return view('registration.create');
	}

	public function store()
	{
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required'
		]);

		$user = User::create(request(['name', 'email', 'password']));

		auth()->login($user);

		return redirect()->to('/');
	}
}
