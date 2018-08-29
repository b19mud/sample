<?php

namespace App\Http\Controllers;
use App\Models\Camera;
use Illuminate\Http\Request;

class AllcameraController extends Controller
{
    //

    public function __construct()
    {
    	$this->middleware('auth',['only' => ['index']]);
    }

    public function index()
    {
    	$cameras = Camera::all();

    	return view('allcamera.index',compact('Camera'));
    }
}
