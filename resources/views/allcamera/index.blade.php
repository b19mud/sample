<!DOCTYPE html>
<html>
<head>
	<title>所有摄像头</title>
	<link rel="stylesheet" href="/css/app.css">
  <script type="text/javascript" src="js/HPlayer/js/jquery172.js"></script>
  <script type="text/javascript" src="js/HPlayer/js/action.js"></script>
</head>
<style type="text/css">
	.video_list div{
		margin-bottom: 20px;
	}
</style>
<body style="overflow-x:hidden">
<header class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="col-md-offset-1 col-md-10">
      <a href="/" id="logo">Monitoring platform</a>
      <nav>
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::check())
            <li><a href="{{ route('allcamera.index')}}">全部摄像头</a></li>
            <li><a href="{{ route('cameras.index')}}">摄像头列表</a></li>
            <li><a href="{{ route('users.index') }}">用户列表</a></li>
            <li><a href="/playback">视频回放</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{ Auth::user()->name }} <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                <li><a href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a></li>
                <li class="divider"></li>
                <li>
                  <a id="logout" href="#">
                    <form action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                    </form>
                  </a>
                </li>
              </ul>
            </li>
          @else
            <li><a href="#">帮助</a></li>
            <li><a href="{{ route('login') }}">登录</a></li>
          @endif
        </ul>
      </nav>
    </div>
  </div>
</header>
<div class="video_list" style="width: 100%;height: auto;display:flex;flex-direction:row;align-items:center;flex-wrap:wrap;
justify-content: space-around;">
	<!--<div style="width: 30%;
            height: 200px;">
            <div id="CuPlayer" >
                <SCRIPT LANGUAGE=JavaScript>        
                    var vID        = ""; 
                    var vWidth     = "100%";
                    var vHeight    = "200px";
                    var vFile      = "js/HPlayer/CuSunV2setLive.xml";
                    var vPlayer    = "js/HPlayer/player.swf?v=2.5";
                    var vPic       = "js/HPlayer/images/start.jpg";
                    var vCssurl    = "js/HPlayer/images/mini.css";

                    //PC端
                    var vServer    = "rtmp://120.78.157.220/videotest";
                    var vMp4url    = "";  
                </SCRIPT> 
            <script class="CuPlayerVideo" data-mce-role="CuPlayerVideo" type="text/javascript"  src="js/HPlayer/js/CuSunHLSX2.min.js"></script>
            </div>
  </div>-->
  @foreach ($cameras as $camera)
  <div style="width: 30%;height: 200px;">
  <object id="CuPlayerVideo_video_object" width="100%" height="200px" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param name="movie" value="js/HPlayer/player.swf?v=2.5"><param name="flashvars" value="JcScpFile=js/HPlayer/CuSunV2setLive.xml&amp;JcScpVideoPath=&amp;JcScpImg=js/HPlayer/images/start.jpg&amp;JcScpServer={{$camera->ip_address}}"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="wmode" value="Transparent"><embed id="CuPlayerVideo_video_embed" src="js/HPlayer/player.swf?v=2.5" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="Transparent" width="100%" height="200px" flashvars="JcScpFile=js/HPlayer/CuSunV2setLive.xml&amp;JcScpVideoPath=&amp;JcScpImg=js/HPlayer/images/start.jpg&amp;JcScpServer={{$camera->ip_address}}"></object>
  </div>
@endforeach 
</div>
</body>
</html>