<div id="addmemberModal" class="modal hide fade" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">ADD MEMBER</h3>
    </div>
    <div class="modal-body">
        <form id="membership-register">
        <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}" />
        <div class="input-prepend">
            <div id="gallery"></div>
            <span class="add-on"><i class="btn-icon-only icon-user"></i></span>
            <input name="first_name" class="span4" required="" type="text" placeholder="First Name">
            <br><br>
            <span class="add-on"><i class="btn-icon-only icon-user"></i></span>
            <input name="last_name" class="span4" required="" type="text" placeholder="Last Name"><br><br>
            <span class="add-on"><i class="btn-icon-only icon-phone"></i></span>
            <input name="contact_num" class="span4" required="" type="text" placeholder="Contact Number"><br><br>
            <span class="add-on"><i class="btn-icon-only icon-envelope"></i></span>
            <input name="mail_address" class="span4" required="" type="text" placeholder="Email"><br><br>
            <span class="add-on"><i class="btn-icon-only icon-star"></i></span>
            <select class="span4" required="" name="ranking">
                <option value="" disabled selected hidden>Select Ranking ...</option>
                @foreach(config('define.ranking') as $id => $value)
                <option value="{{$id}}">{{$value}}</option>
                @endforeach
            </select><br><br>
            <label for="image_file">Image Upload</label>
            <input type="file" name="image_file" id="image_file" accept="image/*" />
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">
            <i class="icon-ok"></i>
            ADD
        </button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        </form>
    </div>
</div>
<script type="text/javascript">
(function(){
function previewImage(file) {
    $('.thumbnail').remove();
    var galleryId = "gallery";

    var gallery = document.getElementById(galleryId);
    var imageType = /image.*/;

    if (!file.type.match(imageType)) {
        throw "File Type must be an image";
    }

    var thumb = document.createElement("div");
    thumb.classList.add('thumbnail');

    var img = document.createElement("img");
    img.file = file;
    thumb.appendChild(img);
    gallery.appendChild(thumb);

    // Using FileReader to display the image content
    var reader = new FileReader();
    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    reader.readAsDataURL(file);
}

var uploadfiles = document.querySelector('#image_file');
uploadfiles.addEventListener('change', function () {
    var files = this.files;
    //for(var i=0; i<files.length; i++){
        previewImage(this.files[0]);
    //}

}, false);
})();
</script>