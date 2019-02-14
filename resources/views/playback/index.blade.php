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
          <script>var vID = ''; var vWidth = '100%';var vHeight = '560px';var vFile = '/js/HPlayer/CuSunV2setLive.xml';var vPlayer= '/js/HPlayer/player.swf?v=2.5';var vPic = '/js/HPlayer/images/start.jpg';var vCssurl= '/js/HPlayer/images/mini.css';var vServer = 'aaaaaa';var vMp4url = '';</script><script class="CuPlayerVideo" data-mce-role="CuPlayerVideo" type="text/javascript"  src="/js/HPlayer/js/CuSunHLSX2.min.js"></script>
  </div>
	</div>
<div style="display: inline-block;float:right;height: 560px;background: #cdd7d8; width: 20%">
  <div class="form-group">
    <form id="choose_form" name="choose_form">
      {{ csrf_field() }}
      <label>选择摄像头</label>
      <select class="form-control" name="camera_name">
        @foreach($cameras as $camera)
        <option>{{$camera->name}}</option>
        @endforeach
        </select>
        <label>日期：</label>
        <div class='input-group date form_datetime'>
          <input type='text' class="form-control" name="date" />
          <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
        <button type="button" class="btn btn-default btn-sm" name="download_button" onclick="query()">
        <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>查询
        </button>
    </form>
  </div>



  <div>
          <form id="play_form">
          {{ csrf_field() }}
          <div>
        <label>文件列表：</label>
 <!-- <div class="list-group pre-scrollable" style="width:100%; height:220px; overflow:auto" id="file_list">-->
        <select class="form-control" id="file_list" size="5" name="file"></select>
        </div>

          <button type="button" class="btn btn-default btn-sm" name="download_button" onclick="play()">
          <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>播放
          </button>
          </form>
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
$(".form_datetime").datetimepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayBtn: true,
    pickerPosition: "bottom-left",
    minView: 2
});
//$('button[name="download_button"]').click( function() {
//    $.post('/download',$("#download_form").serialize());
//});
//<button type=\"button\" class=\"list-group-item\">'+text[i].filename+'</button>
function query()
{
  $.post('/query',$("#choose_form").serialize(),function(data){
    $("#file_list").empty();
    var text=JSON.parse(data);
    //var rows=text.row();
    //alert(text[1].filename);
    rows = Object.keys(text).length;
    for(var i=0;i<rows;i++)
    {
      $("#file_list").append('<option>'+text[i].filename+'</option>');
    }});
}
function download()
{
  $.post('/download',$("#download_form").serialize());
}
function play()
{
  var base_url = "rtmp://120.78.157.220";
  var tag="";
  if(choose_form.camera_name.value == "杭电南一门")
  {
    tag = "/vod1/";
  }else if(choose_form.camera_name.value == "杭电南二门")
  {
    tag = "/vod2/";
  }else if(choose_form.camera_name.value == "杭电南三门")
  {
    tag = "/vod3/";
  }
  
  var remote_file = play_form.file.value;
  vServer = base_url+tag+remote_file;
  console.log(vServer);
  
}
//console.log(vServer);
</script>

@stop