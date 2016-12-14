<div id="renewModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">WIFI MEMBER RENEWAL</h3>
    </div>
    <div class="modal-body">
        <span class="span3">
        <a href="{{route('wifi.renew',[$mid,7])}}" class="btn btn-large btn-danger">
            <i class="btn-icon-only icon-bookmark-empty icon-large"> <br />WEEK</i>
        </a>
        <br />
        〜{{$wifi_exp_date_nextweek}}
        </span>
        <span class="span3">
        <a href="{{route('wifi.renew',[$mid,30])}}" class="btn btn-large btn-info">
            <i class="btn-icon-only icon-bookmark icon-large"> <br />MONTH</i>
        </a>
        <br />
        〜{{$wifi_exp_date_nextmonth}}
        </span>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    </div>
</div>