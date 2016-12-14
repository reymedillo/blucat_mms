<div id="edit-member-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>EDIT MEMBER</h3>
    </div>
    <div class="modal-body">
        <form id="membership-update">
        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
        <div class="input-prepend">
            <div id="edit_gallery">
                <div class="edit_thumbnail" id="edit_thumbnail">
                    <img src="">
                </div>
            </div>
            <span class="add-on"><i class="btn-icon-only icon-user"></i></span>
            <input id="edit_first_name" name="first_name" class="span4" required="" type="text" placeholder="First Name">
            <br><br>
            <span class="add-on"><i class="btn-icon-only icon-user"></i></span>
            <input id="edit_last_name" name="last_name" class="span4" required="" type="text" placeholder="Last Name"><br><br>
            <span class="add-on"><i class="btn-icon-only icon-phone"></i></span>
            <input id="edit_contact_num" name="contact_num" class="span4" required="" type="text" placeholder="Contact Number"><br><br>
            <span class="add-on"><i class="btn-icon-only icon-envelope"></i></span>
            <input id="edit_mail_address" name="mail_address" class="span4" required="" type="text" placeholder="Email"><br><br>
            <span class="add-on"><i class="btn-icon-only icon-star"></i></span>
            <select class="span4" required="" id="edit_ranking" name="ranking">
                <option value="" disabled selected hidden>Select Ranking ...</option>
                @foreach(config('define.ranking') as $id => $value)
                <option value="{{$id}}">{{$value}}</option>
                @endforeach
            </select><br><br>
            <label for="image_file">Image Upload</label>
            <input type="file" name="image_file" id="edit_image_file" accept="image/*" />
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">
            <i class="icon-ok"></i>
            UPDATE
        </button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        </form>
    </div>
</div>

<script type="text/javascript">
(function(){
function previewImage(file) {
    $('.edit_thumbnail').remove();
    var galleryId = "edit_gallery";

    var gallery = document.getElementById(galleryId);
    var imageType = /image.*/;

    if (!file.type.match(imageType)) {
        throw "File Type must be an image";
    }

    var thumb = document.createElement("div");
    thumb.classList.add('edit_thumbnail');
    thumb.setAttribute('id','edit_thumbnail');

    var img = document.createElement("img");
    img.file = file;
    thumb.appendChild(img);
    gallery.appendChild(thumb);

    // Using FileReader to display the image content
    var reader = new FileReader();
    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    reader.readAsDataURL(file);
}

var uploadfiles = document.querySelector('#edit_image_file');
uploadfiles.addEventListener('change', function () {
    var files = this.files;
    //for(var i=0; i<files.length; i++){
        previewImage(this.files[0]);
    //}

}, false);
})();
</script>