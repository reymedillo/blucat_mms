<div id="delete-member-modal" data-backdrop="static" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3>DELETE MEMBERSHIP</h3>
</div>
<div class="modal-body">

<div class="box-content">
    <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
    <span><i class="btn-icon-only icon-barcode"></i> : <span><code id="member_id"></code><br />
    <span><i class="btn-icon-only icon-user"></i> : <span><code id="name"></code><br />
    <span><i class="btn-icon-only icon-phone"></i> : <span><code id="contact_num"></code><br />
    <span><i class="btn-icon-only icon-envelope"></i> : <span><code id="mail_address"></code><br />
    <span><i class="btn-icon-only icon-money"></i> : <span><code id="points"></code><br />
</div>
<p>
Are you sure you want to delete?
</p>
<button id="delete-member-button" type="button" class="btn btn-danger" name="action" value="CONFIRM">DELETE</button>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
</div>
</div>