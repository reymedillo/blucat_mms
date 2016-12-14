@extends('app')
@section('title', 'IPPP MMS / Wifi')
@section('content')
@include('left-sidebar')
<section class="nav nav-page">
<div class="container">
    <div class="row">
        <div class="span7">
            <header class="page-header">
                <h3>Wifi<br/><small>Manage Wifi Password</small></h3>
            </header>
        </div>
        <div class="span9">
            <ul class="nav nav-pills">
                <li>
                    <button id="vtour-button" rel="tooltip" onclick="window.open('/wifi/print');" title="Print Wifi Password" data-placement="bottom">
                        <i class="icon-print icon-large"></i>
                    </button>
                </li>
                <li>
                    <button href="#updateModal" role="button" data-toggle="modal" id="vguide-button" rel="tooltip" title="Input Wifi Password" data-placement="bottom">
                        <i class="icon-cogs icon-large"></i>
                    </button>
                </li>
            </ul>
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
                <h5>Membership Search</h5>
            </div>
            <div class="box-content">
                <legend class="lead">
                    Member ID : 
                    <form class="form-inline" method="get" action="/wifi">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-barcode"></i></span>
                            <input name="mid" id="mid" class="span4" type="text" placeholder="Member ID" value="{{$mid}}">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon-search"></i>
                                Search
                            </button>
                        </div>
                    </form>
                </legend>
                @if(count($member)>0)
                <div class="box-content">
                    <div class="well well-small well-shadow span3">
                        <img src="{{asset('images/member/'.$member->pic)}}" />
                    </div>
                    <div class="well well-small well-shadow span4">
                        <legend class="lead">EXPIRE</legend>
                        <div class="box-content">
                            <h2 style="text-align:center" class="alert-info">{{ !is_null($member->wifi_exp_date)?Carbon\Carbon::parse($member->wifi_exp_date)->format('Y/m/d'):"NULL" }}</h2>
                            <a href="#renewModal" role="button" data-toggle="modal" class="btn btn-large btn-info">
                                <i class="btn-icon-only icon-repeat"> RENEW</i>
                            </a>
                            @if(!is_null($member->wifi_exp_date))
                            <a href="javascript:window.open('wifi/print/{{$mid}}');" role="button" data-toggle="modal" class="pull-right btn btn-large btn-info">
                                <i class="btn-icon-only icon-print"> PRINT</i>
                            </a>
                            @endif
                        </div>
					</div>
                    @include('member-info')
                    @include('actions')
                </div>
                    @include('modals.wifi.renew-modal')
                @else
                    @if(strlen($mid)>0)
                        Not found
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
</section>
@include('modals.wifi.update-modal')

<script src="/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
<script src="/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
<script src="/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
<script type="text/javascript">
    $('#updateModal').on('shown', function(){
        $('#wifiPass').focus();  
    });
    $("[rel=tooltip]").tooltip();
    $('#mid').focus();
</script>
@endsection
