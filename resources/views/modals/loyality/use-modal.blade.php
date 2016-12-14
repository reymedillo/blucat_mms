<div id="useloyalityModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">POINT USAGE</h3>
    </div>
    <div class="modal-body">
    <form method="POST" action="/{{$mid}}/points">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="input-prepend">
            <span class="add-on"><i class="icon-money"></i></span>
            <input id="myPoint2" name="myPoint" class="span4" type="text" required="" placeholder="Used Point Amount">
            <button type="submit" name="minus" class="btn btn-primary">
                <i class="icon-ok"></i>
                USE
            </button>
        </div>
    </form>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    </div>
</div>