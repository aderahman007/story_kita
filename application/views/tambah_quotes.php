<section>
    <div class="container">
        <center><a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-primary btn-sm">Home</button></a></center>
        <h4 style="color:#1DE2D9">Tambah Quotes</h4>
        <div class="card">
            <div class="card-body">
                <!-- method="post" action="catatan/tambah_catatan" -->
                <form method="post" id="myform" action="<?php echo base_url('catatan/tambah_quotes'); ?>">

                    <div class="form-group">
                        <label for="IsiStory">Isi Quotes</label>
                        <textarea id="ckeditor" name="isi_quotes" style="height: 500px;"></textarea>
                        <?= form_error('isi_quotes', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <button type="submit" class="btn btn-info submit">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <center><a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-primary btn-sm">Home</button></a></center>
    </div>
</section>