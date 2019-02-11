<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camera;
use Illuminate\Support\Facades\DB;

class CameraController extends Controller
{
    //构造函数 确定权限.....
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create', 'destroy', 'index', 'show'],
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
        //$remote_mysql_address = '120.78.157.220';
        //$remote_mysql_username = 'root';
        //$remote_mysql_password = 'root';
        //$remote_database = 'sample_video';
        $this->validate($request, ['name' => ['required', 'max:50'], 'ip_address' => ['required', 'regex:/rtmp:\/\/(2(5[0-5]{1}|[0-4]\d{1})|[0-1]?\d{1,2})(\.(2(5[0-5]{1}|[0-4]\d{1})|[0-1]?\d{1,2})){3}\/[a-zA-Z]*/']]);

        //$conn=new mysqli($remote_mysql_address,$remote_mysql_username,$remote_mysql_password);
        DB::connection('remote_mysql')->statement('create table '.$request->name.' (id int(6) auto_increment primary key,filename varchar(30) not null)');
        //$sql = "CREATE TABLE $request->name (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,file_name VARCHAR(30) NOT NULL)";

        $camera = Camera::create([
            'name' => $request->name,
            'ip_address' => $request->ip_address,
        ]);

        session()->flash('success', '添加成功');

        return redirect()->route('cameras.index');
    }

    //删除摄像头
    public function destroy(Camera $camera)
    {
        //$this->authorize('destroy_camera',$camera);
        DB::connection('remote_mysql')->statement('drop table '.$camera->name);
        $camera->delete();
        session()->flash('success', '成功删除设备！');

        return back();
    }

    //摄像头列表
    public function index()
    {
        $cameras = Camera::all();

        return view('cameras.index', compact('cameras'));
    }

    //摄像头操作界面
    public function show(Camera $camera)
    {
        return view('cameras.show', compact('camera'));
    }

    public function playback()
    {
    }
}
