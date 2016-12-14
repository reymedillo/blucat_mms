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
                                <button href="#myModal" role="button" data-toggle="modal" id="vguide-button" rel="tooltip" title="Input Wifi Password" data-placement="bottom">
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
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-barcode"></i></span>
                                    <input name="mid" id="mid" class="span4" type="text" placeholder="Member ID" value="">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icon-search"></i>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </legend>
                    </div>
                </div>
            </div>
        </div>
        </section>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">WIFI PASSWORD</h3>
</div>
<div class="modal-body">
<form method="POST" action="/wifi/update">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="last-modified">
LAST MODIFIED: {{$date}}
</div>
<div class="input-prepend">
    <span class="add-on"><i class="icon-signal"></i></span>
    <input id="wifiPass" name="wifiPass" class="span4" type="text" placeholder="Today's WIFI password">
    <button type="submit" class="btn btn-primary">
        <i class="icon-ok"></i>
        ADD
    </button>
</div>
</form>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
</div>
</div>

        <script src="/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script type="text/javascript">
            $('#myModal').on('shown', function(){
                $('#wifiPass').focus();  
            });
            $("[rel=tooltip]").tooltip();
            $('#mid').focus();
        </script>
@endsection
