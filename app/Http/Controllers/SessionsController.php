<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;

class SessionsController extends Controller
{
    //
	public function create()
	{
		return view('sessions.create');
	}

	public function store(Request $request)
	{
		$credentials = $this->validate($request,['email'=>'required|email|max:255','password'=>'required']);

		if (Auth::attempt($credentials,$request->has('remember')))
		{
			session()->flash('success','welcome back!');
			return redirect()->intended(route('users.show',[Auth::user()]));
		}else{
			session()->flash('danger','sorry');
			return redirect()->back();
		}
		return;
	}

	public function destroy()
	{
		Auth::logout();
		session()->flash('success','exit!');
		return redirect('login');
	}

	public function __construct()
	{
		$this->middleware('guest',['only'=>['create']]);
	}
}
