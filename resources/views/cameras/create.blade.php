@extends('layouts.default')
@section('title', '添加设备')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>添加设备</h5>
    </div>
    <div class="panel-body">
    	 @include('shared._errors')
      <form method="POST" action="{{ route('cameras.store') }}">
      	{{ csrf_field() }}
          <div class="form-group">
            <label for="name">名称：</label>
            <input type="text" name="name" class="form-control">
          </div>

          <div class="form-group">
            <label for="ip_address">ip地址：</label>
            <input type="text" name="ip_address" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">添加</button>
      </form>
    </div>
  </div>
</div>
@stop