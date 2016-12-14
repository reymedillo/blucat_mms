@extends('master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/newslist.css"/>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{!! trans('global.news_create_complete') !!}</div>
        <div class="panel-body"> 
          {!! trans('global.news_create_complete_new_completed') !!}</br><a href="/news/list">{!! trans('global.news_create_complete_go_back') !!}</a></br><a href="/news/create-input">{!! trans('global.news_create_new') !!}</a>
        </div><!-- .panel-body -->
      </div><!-- .panel -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container-fluid -->
@endsection