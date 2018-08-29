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
<div style="background: #3c3e42;padding: 20px;margin-bottom: 120px;">
	<div style="background:#fff;display: inline-block;height: 560px; width: 75%">
	<video controls="controls" height="560" width="100%"></video>
	<div style="font-size: 14px;
	padding: 3px 5px;
	box-sizing: border-box;
	background: #3c3e42;
	color: #3c3e42;
	margin-left: 5px;
	margin-right: 5px;
	margin-top: 5px;">
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
				<button>第n号</button>
	</div>
	</div>
	<div style="display: inline-block;float:right;height: 560px;background: #cdd7d8; width: 20%">
		55555
	</div>
</div>

@stop