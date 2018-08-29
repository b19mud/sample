<!DOCTYPE html>
<html>
<head>
	<title>所有摄像头</title>
	<link rel="stylesheet" href="/css/app.css">
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
	<div style="width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	</video>
            </div>
	<div style="background-color:#5CB85C;width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	</video>
            </div>
	<div style="background-color:#F0AD4E;width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	</video>
            </div>
	<div style="background-color:#FFC706;width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	</video>
            </div>
    <div style="background-color:#5BC0DE;width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	</video>
            </div>
	<div style="background-color:#5CB85C;width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	source</video>
            </div>
	<div style="background-color:#F0AD4E;width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	</video>
            </div>
	<div style="background-color:#FFC706;width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	</video>
            </div>
    <div style="background-color:#FFC706;width: 30%;
            height: 200px;">
            	<video style="width: 94%;height: 190px;margin: 5px 3%;" autoplay="autoplay">
            		<source src="#" type="video/mp4">
            	</video>
            </div>        
</div>
</body>
</html>