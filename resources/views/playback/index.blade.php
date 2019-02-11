@extends('layouts.default')
@section('title', "视频回放")
@section('content')
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <div class="col-md-12">
      <div class="col-md-offset-2 col-md-8">
        <section class="user_info">
        
        </section>
      </div>
    </div>
  </div>
</div>
<div style="background: #3c3e42;padding: 20px;margin-bottom: 80px;">
	<div style="background:#fff;display: inline-block;height: 560px; width: 80%">
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
                    var vServer    = "";
                    var vMp4url    = "";  
                </SCRIPT> 
            <script class="CuPlayerVideo" data-mce-role="CuPlayerVideo" type="text/javascript"  src="/js/HPlayer/js/CuSunHLSX2.min.js"></script>
            </div>
	</div>
<div style="display: inline-block;float:right;height: 560px;background: #cdd7d8; width: 20%">
  <div class="form-group">
      <label>选择摄像头</label>
      <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
  </div>
<div>
  文件列表
</div>
<div>
  播放
</div>
  <div>
          <form id="download_form">
          {{ csrf_field() }}
          <input type="text" name="url">
          <button type="button" class="btn btn-default btn-sm" name="download_button" onclick="download()">
          <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>下载到本地
          </button>
          </form>
</div>
  </div>
	<div style="display: inline-block;width: 75%">
  <div>
  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 14
  </button>
  
  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-plane" aria-hidden="true"></span> 14
  </button>

  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-road" aria-hidden="true"></span> 14
  </button>

  <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span> 14
  </button>

  </div>
</div>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//$('button[name="download_button"]').click( function() {
//    $.post('/download',$("#download_form").serialize());
//});
function download()
{
  $.post('/download',$("#download_form").serialize());
}
</script>
@stop