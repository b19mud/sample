@extends('layouts.default')
@section('title', '所有摄像头')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>所有摄像头</h1>
  <a href="{{route('add_camera')}}">添加摄像头</a>
  <ul class="users">
    @foreach ($cameras as $camera)
      <li>
        
        <a href="{{ route('cameras.show', $camera->id) }}" class="username">{{ $camera->name }}</a>
        
      <form action="{{ route('cameras.destroy', $camera->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
      </form>

      </li>

    @endforeach
  </ul>
</div>    
@stop