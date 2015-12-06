<script>
    /**
     * Make sure to use <?php form_open_multipart(); ?> to create form
     */


</script>

<form>
    <img src="<?php echo base_url(""); ?>" id="profile-img" class="img-thumbnail profile-img">
    <input type="file" name="profile_img" id="img-inp" onchange="readURL(this);">

</form>


<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {

                /**
                 * #profile-img is the id of <img src....> tag
                 */

                $('#profile-img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    /**
     * #imp-inp is the id of the button used to browse the image.
     */

    $("#imp-inp").change(function() {
        readURL(this);
    });
</script>