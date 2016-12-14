@extends('master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/newslist.css"/>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{!! trans('global.news_edit_confirm') !!}</div>
        <div class="panel-body"> 
          @if(!empty($news))
            <form class="form-horizontal" role="form" method="POST" action="/news/edit-complete" enctype="multipart/form-data">
              {!! csrf_field() !!} 
              <div class="form-group">
                <label class="col-md-1 control-label">{{ trans('global.news_content') }}</label>
                <div class="col-md-11">
                  <div class="edit-confirm-entity-html">
                    <div>{!! nl2br(e($news['content'])) !!}</div>
                  </div>
                  <input type="hidden" name="content" value="{{ $news['content'] }}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  {!! Form::hidden('id', $value = $news['id'], [])  !!}
                  <button onclick="window.history.back();" class="btn btn-primary">{!! trans('global.back') !!}</button>
                  <button type="submit" class="btn btn-primary">{!! trans('global.submit') !!}</button>
                </div>
              </div>
            </form>
          @endif
        </div><!-- .panel-body -->
      </div><!-- .panel -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container-fluid -->
@endsection