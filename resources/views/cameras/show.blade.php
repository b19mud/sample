@extends('layouts.default')
@section('title', $camera->name)
@section('content')
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <div class="col-md-12">
      <div class="col-md-offset-2 col-md-8">
        <section class="user_info">
        @include('shared._cameras_info', ['camera' => $camera])
        </section>
      </div>
    </div>
  </div>
</div>
<div style="background: #3c3e42;padding: 20px;margin-bottom: 80px;">
	<div style="background:#fff;display: inline-block;height: 560px; width: 75%">
	<div id="CuPlayer" >
                <SCRIPT LANGUAGE=JavaScript>        
                    var vID        = ""; 
                    var vWidth     = "100%";
                    var vHeight    = "560px";
                    var vFile      = "/js/HPlayer/CuSunV2setLive.xml";
                    var vPlayer    = "/js/HPlayer/player.swf?v=2.5";
                    var vPic       = "/js/HPlayer/images/start.jpg";
                    var vCssurl    = "/js/HPlayer/images/mini.css";

                    //PC端
                    var vServer    = "{{$camera->ip_address}}";
                    var vMp4url    = "";  
                </SCRIPT> 
            <script class="CuPlayerVideo" data-mce-role="CuPlayerVideo" type="text/javascript"  src="/js/HPlayer/js/CuSunHLSX2.min.js"></script>
            </div>
	</div>
	<div style="display: inline-block;float:right;height: 560px;background: #cdd7d8; width: 20%">
		55555
  </div>
	<div style="display: inline-block;width: 75%">
  <div>
  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 14
  </button>
  
  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 14
  </button>

  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 14
  </button>

  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 14
  </button>

  </div>
</div>

@stop