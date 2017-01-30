<div class="well well-small well-shadow span6">
    <legend class="lead">Member Info&nbsp;<span class="alert-info">{{isset(config('define.ranking')[$member->ranking])?config('define.ranking')[$member->ranking]['name']:false}}</span></legend>
    <div class="box-content">
        <span><i class="btn-icon-only icon-barcode"></i> : <span><code>{{$member->id}}</code><br />
	    <span><i class="btn-icon-only icon-user"></i> : <span><code>{{$member->first_name}}&nbsp;{{$member->last_name}}</code><br />
	    <span><i class="btn-icon-only icon-phone"></i> : <span><code>{{$member->contact_number}}</code><br />
	    <span><i class="btn-icon-only icon-envelope"></i> : <span><code>{{$member->mail_address}}</code><br />
	    <span><i class="btn-icon-only icon-money"></i> : <span><code>{{$member->points}}</code><br />
    </div>
</div>
