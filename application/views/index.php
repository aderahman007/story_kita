<div class="col-md text-center"><?= $this->session->flashdata('pesan'); ?></div>
<section>
	<div class="alert alert-success text-center" role="alert">
		<h4 class="alert-heading">Quotes for Today!</h4>
		<?php foreach ($quotes as $q) {  ?>
			<p><?= $q->quotes; ?></p>
		<?php } ?>
		<hr>

		<p class="mb-0 ">Ade Rahman <span class="fa fa-heart"></span> Alma Shobrina</p>
	</div>
</section>

<section class="pb-3">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="card">
					<div class="card-body">
						<section class="pb-3 text-center">
							<div class="container">
								<h5 class="section-title h4">STORY ALMA</h5>
								<div class="row">
									<!-- Team member -->
									<?php
									foreach ($catatan_alma as $c) {
									?>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="image-flip">
												<div class="mainflip flip-0">
													<div class="frontside">
														<div class="card">
															<div class="card-body text-center">
																<p><img class=" img-fluid" src="<?php echo base_url('assets/images/alma.png'); ?>" alt="card image"></p>
																<h6 class="card-title"><?php echo $c->judul_catatan; ?></h6>
																<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a><br>
																<i style="font-size: 12px; margin-top: 20px"><?php echo date('l, d-m-yy', strtotime($c->tgl_catatan)); ?></i>
															</div>
														</div>
													</div>
													<div class="backside">
														<div class="card">
															<div class="card-body text-center mt-4">
																<h6 class="card-title"><?php echo $c->judul_catatan; ?></h6>
																<p style="font-size:12px; text-align:justify" class="card-text">
																	<?php
																	$num_char = 70;
																	$text = $c->isi_catatan;

																	echo substr($text, 0, $num_char) . '...';
																	?>
																</p>
																<a href="<?php echo base_url('catatan/tampil_detail_catatan/' . $c->id_catatan); ?>"><button type="button" class="btn btn-primary btn-sm">Read More</button></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
									<!-- ./Team member -->


								</div>
							</div>
						</section>
					</div>
				</div>
			</div>


			<!-- Card 2 -->
			<div class="col-xs-12 col-md-6">
				<div class="card">
					<div class="card-body">
						<section class="pb-3 text-center">
							<div class="container">
								<h5 class="section-title h4">STORY ADE</h5>
								<div class="row">
									<!-- Team member -->
									<?php
									foreach ($catatan_ade as $c) {
									?>
										<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="image-flip">
												<div class="mainflip flip-0">
													<div class="frontside">
														<div class="card">
															<div class="card-body text-center">
																<p><img class=" img-fluid" src="<?php echo base_url('assets/images/ade.png'); ?>" alt="card image"></p>
																<h6 class="card-title"><?php echo $c->judul_catatan; ?></h6>
																<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a><br>
																<i style="font-size: 10px; margin-top: 20px"><?php echo date('l, d-m-yy', strtotime($c->tgl_catatan)); ?></i>
															</div>
														</div>
													</div>
													<div class="backside">
														<div class="card">
															<div class="card-body text-center mt-4">
																<h6 class="card-title"><?php echo $c->judul_catatan; ?></h6>
																<p style="font-size:12px; text-align:justify" class="card-text">
																	<?php
																	$num_char = 70;
																	$text = $c->isi_catatan;

																	echo substr($text, 0, $num_char) . '...';
																	?>
																</p>
																<a href="<?php echo base_url('catatan/tampil_detail_catatan/' . $c->id_catatan); ?>"><button type="button" class="btn btn-primary btn-sm">Read More</button></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
									<!-- ./Team member -->


								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>