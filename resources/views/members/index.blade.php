@extends('app')
@section('title', 'IPPP MMS / Wifi')
@section('content')
@include('left-sidebar')
<style>
    #gallery .thumbnail{
        width:200px;
        height: 150px;
        float:right;
    }
    #gallery .thumbnail img{
        width:200px;
        height: 150px;
    }
    #edit_gallery .thumbnail{
        width:200px;
        height: 150px;
        float:right;
    }
    #edit_gallery .thumbnail img{
        width:200px;
        height: 150px;
    }
</style>
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Membership<br/><small>Manage Membership</small></h3>
                </header>
            </div>
            <div class="page-nav-options">
                <div class="span9">
                    <ul class="nav nav-pills">
                        <li>
                            <a href="#addmemberModal" data-toggle="modal" title="Add Membership"><i class="icon-plus icon-large"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page container">
    <div class="row">
        <div class="span16">
            <div class="box">
            <div class="box-header">
                <i class="icon-user"></i>
                <h5>
                    Membership
                </h5>
            </div>
            <div class="box-content">
                <legend class="lead">
                    Member ID : 
                    <form class="form-inline" method="GET" action="/membership">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-barcode"></i></span>
                            <input id="mid" name="mid" value="{{$mid}}" class="span4" type="text" placeholder="Member ID">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input id="firstname" name="firstname" value="{{$firstname}}" class="span4" type="text" placeholder="First Name">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input id="lastname" name="lastname" value="{{$lastname}}" class="span4" type="text" placeholder="Last Name">
                        </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-search"></i>
                            Search
                        </button>
                    </div>
                    </form>
                </legend>
            </div>
            
            <div class="box-content box-table">
            @if(count($members)>0)
            <table id="sample-table" class="table table-hover table-bordered tablesorter">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Expiration</th>
                        <th class="td-actions"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->first_name}}</td>
                        <td>{{$member->last_name}}</td>
                        <td>{{$member->wifi_exp_date}}</td>
                        <td class="td-actions">
                            <a class="btn btn-small btn-info" data-toggle="modal" data-target="#edit-member-modal" id="{{$member->id}}">
                                <i class="btn-icon-only icon-cogs"></i>
                            </a>

                            <a class="btn btn-small btn-danger" data-toggle="modal" data-target="#delete-member-modal" id="{{$member->id}}">
                                <i class="btn-icon-only icon-remove"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
            </div>
            
        </div>
    </div>
    @include('modals.member.add-modal')
    @include('modals.member.view-modal')
    @include('modals.member.delete-modal')
    @include('modals.member.error-modal')
</section>

<script src="/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
<script src="/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
<script src="/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
<script type="text/javascript">$(window).load(function(){MMS.membership()})</script>
@endsection