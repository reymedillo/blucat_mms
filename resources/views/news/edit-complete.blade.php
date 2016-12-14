@extends('master')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{!! trans('global.news_edit_complete') !!}</div>
        <div class="panel-body"> 
          {!! trans('global.news_edit_complete_update_completed') !!}</br><a href="/news/list">{!! trans('global.news_edit_complete_go_back') !!}</a>
        </div><!-- .panel-body -->
      </div><!-- .panel -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container-fluid -->
@endsection