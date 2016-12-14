@extends('master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/newslist.css"/>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{!! trans('global.news_detail') !!}</div>
        <div class="panel-body"> 
          @if(!empty($news))
            <div class="form-group">
              <label class="col-md-1 control-label">{!! trans('global.news_id') !!}</label>
              <div class="col-md-11">
                <div class="newsid">
                  {!! $news->id !!}
                </div>
              </div>
            </div> 
            <div class="form-group">
              <label class="col-md-1 control-label">{!! trans('global.news_content') !!}</label>
              <div class="col-md-11">
                <div class="show-entity-html">
                  {!! nl2br(e($news->content)) !!}
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button onclick="window.history.back();" class="btn btn-primary" style="margin-right: 15px;">{!! trans('global.back') !!}</button>
              </div>
            </div> 
          @endif
        </div><!-- .panel-body -->
      </div><!-- .panel -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container-fluid -->
@endsection