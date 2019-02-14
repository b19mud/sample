<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camera;
use Illuminate\Support\Facades\DB;

class PlayBackController extends Controller
{
    public function index()
    {
        $cameras = Camera::all();
        return view('playback.index',[
            'cameras'=>$cameras
            ]);
    }

    public function query(Request $request)
    {
        $camera_name = $request->camera_name;
        $date = $request->date;
        $data = DB::connection('remote_mysql')->table($camera_name)->where('filename','like',$date.'%')->get()->toArray();

        return json_encode($data);

    }

    public function playback(Request $request)
    {
        //应该有几个请求参数？
        //$request->name  $request->ip_address 需要拼接文件名　数据库  id  文件名　　表名为目录名也为摄像头名
    }

    public function download_file(Request $request)
    {
        // request 有 几个 参数    日期？ 设备id  文件名
        //return response()->download('http://120.78.157.220/rtmp/video/2018-10-23-22_06_44.flv');
        $path = base_path();
        $save_dir = '/video/';
        $url = $request->url;
        $filename = '11111test.flv';
        $type = 1;
        //创建保存目录
        //if (!file_exists($save_dir) && !mkdir($save_dir, 0777, true)) {
        //    return false;
        //}
        //获取远程文件所采用的方法
        if ($type) {
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $content = curl_exec($ch);
            curl_close($ch);
        } else {
            ob_start();
            readfile($url);
            $content = ob_get_contents();
            ob_end_clean();
        }
        //echo $content;
        $size = strlen($content);
        //文件大小
        $fp2 = fopen($path.'/public/video/'.$filename, 'a');
        fwrite($fp2, $content);
        fclose($fp2);
        unset($content, $url);

        return 1;
    }

}
