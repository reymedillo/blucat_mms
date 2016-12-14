@extends('master')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"></div>
        @if ($alert = Session::get('alert-success'))
          <div class="alert alert-warning">
            {{ $alert }}
          </div>
        @endif
        <div class="panel-body">
          <h1>dashboard</h1>
          <h2>navigation</h2>
          <div>name: {{$me->name}}</div>
          <div>email: {{$me->email}}</div>
          <div>role: {{$me->role}}</div>
          <div><a href="/auth/logout">logout</a></div>
          <h2>案件管理</h2>
          <ul>
          <li><a href="/item/list">案件一覧</a></li>
          <li><a href="/item/create-input">案件登録</a></li>
          </ul>
          <h2>アカウント管理</h2>
          <ul>
          <li><a href="/user/list">アカウント一覧</a></li>
          <li><a href="/user/create-input">アカウント登録</a></li>
          </ul>
          @if($me->role == 0)
          <h2>ニュース管理</h2>
          <ul>
          <li><a href="/news/list">ニュース一覧</a></li>
          <li><a href="/news/create-input">ニュース登録</a></li>
          </ul>
          @endif
        </div><!-- .panel-body -->
      </div><!-- .panel -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container-fluid -->
@endsection
