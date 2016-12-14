<div id="updateModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">WIFI PASSWORD</h3>
    </div>
    <div class="modal-body">
        <form method="POST" action="/wifi/update">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="last-modified">
        LAST MODIFIED:   {{$wifi_last_modified}}
        </div>
        <div class="input-prepend">
            <span class="add-on"><i class="icon-signal"></i></span>
            <input id="wifiPass" name="wifiPass" class="span4" required="" type="text" placeholder="Today's WIFI password">
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