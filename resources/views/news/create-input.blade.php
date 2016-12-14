@extends('master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/newslist.css"/>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{!! trans('global.news_create') !!}</div>
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="panel-body"> 
          <form class="form-horizontal" role="form" method="POST" action="/news/create-confirm" enctype="multipart/form-data">
            {!! csrf_field() !!} 
            <div class="form-group">
              <label class="col-md-1 control-label">{!! trans('global.news_content') !!}</label>
              <div class="col-md-11">
                {!! Form::textarea('content', null, ['class' => 'field', 'size' => '40x20', 'maxlength' => '1000']) !!}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button class="btn btn-primary btn-back" data-target="/news/list">{!! trans('global.back') !!}</button>
                <button type="submit" class="btn btn-primary">{!! trans('global.continue') !!}</button>
              </div>
            </div>
          </form>
        </div><!-- .panel-body -->
      </div><!-- .panel -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container-fluid -->
@endsection