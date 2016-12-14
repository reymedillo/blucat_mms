@extends('app')
@section('title', 'IPPP MMS / Wifi')
@section('content')
@include('left-sidebar')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Loyality<br/><small>Loyalty Program</small></h3>
                </header>
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
                        <form class="form-inline">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-barcode"></i></span>
                                <input id="mid" name="mid" class="span4" type="text" placeholder="Member ID" value="{{$mid}}">
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
                            <legend class="lead">POINTS <a href="javascript:window.open('points.html');" class="btn btn-small pull-right"><i class="btn-icon-only icon-print"></i></a></legend>
                            <div class="box-content">
                                <h2 style="text-align:center" class="alert-info">{{$member->points}}</h2>
                                <a href="#addloyalityModal" role="button" data-toggle="modal" class="btn btn-large btn-info">
                                    <i class="btn-icon-only icon-plus"> ADD</i>
                                </a>
                                <a href="#useloyalityModal" role="button" data-toggle="modal" class="btn btn-large btn-danger">
                                    <i class="btn-icon-only icon-minus"> USE</i>
                                </a>
                            </div>
                            @include('modals.loyality.add-modal')
                            @include('modals.loyality.use-modal')
                        </div>
                        @include('member-info')
                        @include('actions')
                    </div>
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

<script src="/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
<script src="/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
<script src="/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
<script type="text/javascript">
$("[rel=tooltip]").tooltip();

$('#mid').focus();

$('#addloyalityModal').on('shown', function(){
    $('#myPoint').focus();
});
 $("#myPoint,#myPoint2").on("keypress keyup blur",function (event) {    
   $(this).val($(this).val().replace(/[^\d].+/, ""));
    if ((event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});
$('#useloyalityModal').on('shown', function(){
    $('#myPoint2').focus();  
});
</script>

@endsection