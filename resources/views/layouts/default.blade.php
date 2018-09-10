<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/js/HPlayer/js/jquery172.js"></script>
<script type="text/javascript" src="/js/HPlayer/js/action.js"></script>
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