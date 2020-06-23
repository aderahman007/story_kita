
<section class="bg-light">
  <div class="container">
  <center><a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-primary btn-sm">Home</button></a></center>
	<div class="row">
	  <!-- <div class="col-lg-12 mx-auto"> -->
	  
		<!-- Code Terminal -->
		<?php foreach($detail as $d){ ?>
		<div id="wrapper">
		  <div class="box">
			<center><h1><?php echo $d->judul_catatan; ?></h1></center>
			<div id="console">
				<p>
					<?php echo $d->isi_catatan; ?>


					
				</p>
			  
			  	<audio src="<?php echo base_url('assets/mp3/halu.mp3'); ?>" autoplay="autoplay" hidden="hidden" loop></audio>
			</div>
		  </div>
		</div>
		<?php } ?>
	  <!-- </div> -->
	</div>
	<center><a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-primary btn-sm">Home</button></a></center>
  </div>
</section>