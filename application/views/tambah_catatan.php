<section>
    <div class="container">
        <center><a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-primary btn-sm">Home</button></a></center>
        <h4 style="color:#1DE2D9">Tambah Story</h4>
        <div class="card">
            <div class="card-body">
                <!-- method="post" action="catatan/tambah_catatan" -->
                <form method="post" id="myform" action="<?php echo base_url('catatan/tambah_catatan'); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Story</label>
                        <input type="text" name="judul" id="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul Story">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="IsiStory">Isi Story</label>
                        <textarea id="ckeditor" name="isi_story" style="height: 500px;"></textarea>
                        <?= form_error('isi_story', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <button type="submit" class="btn btn-info submit">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <center><a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-primary btn-sm">Home</button></a></center>
    </div>
</section>

<!-- <script type="text/javascript">
    $(document).ready(function(){
        $(".submit").click(function(){
            // event.preventDefault();

            //ambil data
            // var judul_value = $("#judul").val();
            // var story_value = $("#ckeditor").val();
            var data = $('#myform').serialize();

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('catatan/tambah_catatan'); ?>",
                data: data,
                success: function(){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        });
    });
</script>

<script>
    function clik(){
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        });
    }
</script> -->