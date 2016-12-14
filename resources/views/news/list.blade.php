@extends('master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/newslist.css"/>
@endsection
@section('js')
<script type="text/javascript"> $(document).ready(function() {$("#confirm-delete").on('shown.bs.modal', function(e){var id = $(e.relatedTarget).data('id');$('input#confirmdelete').val(id);});}); </script>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">{!! trans('global.news_list') !!}</div>
        @if (\Session::has('success'))
        <div class="alert alert-success">
          {{ \Session::get('success') }}
        </div>
        @endif
        @if (\Session::has('message'))
        <div class="alert alert-info">
          {{ \Session::get('message') }}
        </div>
        @endif
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {!! $errors->first() !!}
        </div>
        @endforeach
        <div class="panel-body"> 
          <div class="panel-body-menu">
            <a href="/news/create-input"><button class="btn btn-default">{!! trans('global.news_create_new') !!}</button></a>
          </div>
          <table class="wborder">
            <body>
              <tr>
                <th class="col1">{!! trans('global.news_id') !!}</th>
                <th class="col2">{!! trans('global.news_content') !!}</th>
                <th class="col3"></th>
                <th class="col4"></th>
              </tr>
              @if(!$news->isEmpty())
                @foreach($news as $item)
                  <tr>
                    <td class="text-center"><a href="/news/show/{{ $item->id }}"><div>{{ $item->id }}</div></a></td>
                    <td class="text-left"><a href="/news/show/{{ $item->id }}"><div>{{ str_limit(strip_tags($item->content), $limit = 20, $end = '...') }}</div></a></td>
                    <td class="text-center"><a href="/news/edit-input/{{ $item->id }}">{!! trans('global.edit') !!}</a></td>
                    <td class="text-center"><button class="btn btn-default" data-id="{{ $item->id }}" data-toggle="modal" data-target="#confirm-delete">{!! trans('global.delete') !!}
                  </tr>
                @endforeach
              @endif
            </body>
          </table>
          <div class="wrapper_pagination">
            <div class="total_items"><label>{{ trans('global.total') }}</label>{{ $news->total() }}</div>
            <div class="pagination_links">{{ $news->links() }}</div>
          </div>
        </div><!-- .panel-body -->
      </div><!-- .panel -->
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container-fluid -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {!! trans('global.news_delete_modal_popup_header') !!}
      </div>
      <div class="modal-body">
        {!! trans('global.news_delete_modal_popup_detail') !!}
      </div>
      <div class="modal-footer">
        <form class="form-horizontal" role="form" method="POST" action="/news/delete" enctype="multipart/form-data">
        {!! csrf_field() !!} 
        <input type="hidden" name="id" id="confirmdelete" value="">
        <button type="submit" class="btn btn-danger btn-ok confirm-delete" style="margin-right: 15px;">{!! trans('global.delete') !!}</button>
        <button type="submit" class="btn btn-default" data-dismiss="modal">{!! trans('global.cancel') !!}</button>
        </form>
      </div>
    </div>
  </div>
</div
@endsection