<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
    <link href="//vjs.zencdn.net/5.19/video-js.min.css" rel="stylesheet">

<script type="text/javascript" src="/js/HPlayer/js/jquery172.js"></script>
<script type="text/javascript" src="/js/HPlayer/js/action.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>

<!--<script src="https://cdn.bootcss.com/flv.js/1.5.0/flv.min.js"></script>
-->
<!--<script src="https://unpkg.com/videojs-flvjs@0.2.0/dist/videojs-flvjs.min.js"></script>-->


<!--<script src="https://unpkg.com/video.js@7.4.1/dist/video.min.js"></script>
<script src="https://unpkg.com/flv.js@1.5.0/dist/flv.min.js"></script>
<script src="https://unpkg.com/videojs-flvjs@0.2.0/dist/videojs-flvjs.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/video.js@7.4.1/dist/video-js.css">-->
<meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <style type="text/css">
    @media screen and (max-width: 800px) {
      .container-fluid {
        margin-top: 150px;
      }
    }
  </style>
  <body>
    @include('layouts._header')

    <div class="container-fluid" style="margin-bottom: 10px;height: auto;">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
    
      </div>     
    </div>
    <script src="/js/app.js"></script>
@include('layouts._footer') 
  </body>
</html>