<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use App\Models\Camera;
use App\Http\Requests;

class CameraController extends Controller
{
    //构造函数 确定权限.....
    public function __construct()
    {
    	$this->middleware('auth',[
    		'only' => ['create','destroy','index','show',]
    	]);
    }

    //添加摄像头 ip??
    public function create()
    {
    	return view('cameras.create');
    }

    //验证格式???
    public function store(Request $request)
    {
    	$this->validate($request,['name' => 'required|max:50','ip_address'=>'ip']);
    	$camera = Camera::create([
            'name' => $request->name,
            'ip_address' => $request->ip_address,
        ]);
    	session()->flash('success', '添加成功');
    	return redirect()->route('cameras.index');
    }


    //删除摄像头
    public function destroy()
    {
    	$this->authorize('destroy',$camera);
        $camera->delete();
        session()->flash('success', '成功删除设备！');
        return back();
    }

    //摄像头列表
    public function index()
    {
    	$cameras = Camera::all();
    	return view('cameras.index',compact('cameras'));
    }


    //摄像头操作界面
    public function show(Camera $camera)
    {
    	return view('cameras.show',compact('camera'));

    }



}


