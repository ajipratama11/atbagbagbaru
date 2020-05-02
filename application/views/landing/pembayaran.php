<!doctype html>
<html lang="en">

<head>
   
  <?php $this->load->view('templates/head'); ?>
  
  
</head>
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <?php $this->load->view('templates/header'); ?>
    </header>
  
    <!--====== HEADER PART ENDS ======-->
    <body style="margin-top:150px">
    <div class="row col-md-12">
	<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Kode Produk</td>
							<td class="image">Produk</td>
							<td class="description"></td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<?php foreach($this->cart->contents() as $a){  ?>
						<?php  $pesanan=$a['idpesan']; ?>
						<?php } ?>
					
					<h3>
					Kode Pesan : <?php echo $pesanan ?>
					</h3>
					

					<?php foreach($this->cart->contents() as $a){ 
							// $idpesan = $a->pesan_id_pesan;
					
							?>
							<?php  $pesanan=$a['idpesan']; ?>
							<!-- <?php echo $a['id']; ?> -->
					<tbody>
						<tr>
							<td class="cart_product">
							<p> <?php echo $a['id'] ?></p>
							</td>
							<td class="cart_product">
							<p> <?php echo $a['name'] ?></p>
							</td>
							<td class="cart_description">
								<!-- <h4><a href=""><?php print $a['name'] ; ?>    (<?php echo $a['berat']*$a['qty']; ?> gram)</a></h4>
								<p>Kode produk : <?php echo $a['id'] ; ?><br>Stok : <?php echo $a['stok']; ?></p> -->
								
							</td>
							<td class="cart_price">
								<p>Rp. <?php $format_indonesia = number_format ($a['price'], 0, ',', '.');
                          			echo $format_indonesia; ?>,00-</p>
							</td>
							<td class="cart_quantity">
								<p><?php echo $a['qty'] ; ?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rp. <?php $format_indonesia = number_format ($a['subtotal'], 0, ',', '.');
                         			 echo $format_indonesia; ?>,00-</p>
							</td>
							
						</tr>
						<tr>
						
						<?php } ?>
						<td class="cart_total">
						<th colspan="4"></th>
							<th colspan="6">
								<p class="cart_total_price">Rp. <?php $format_indonesia = number_format ($this->cart->total(), 0, ',', '.');
									  echo $format_indonesia; ?>,00-</p>
									  </th>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action" margin-left="20px">
		<div class="container" >
			<div class="heading">
				<h3>* Dibawah ini adalah total dari belanjaan anda</h3>
				<p>Harga pengiriman ditentukan berdasarkan jarak lokasi pengiriman</p>
			</div>
			<div class="row">
				<div class="col-md-4"  >
					<div class="chose_area" style="margin-right: 120px">
						<ul class="user_option">
							<li>
								<b>Data pengiriman anda:</b>
							</li><br>
							<li>
								Nama
								<input class="form-control" disabled value="<?php echo $namapengirim; ?>">
							</li>
							<li>
								Provinsi 
								<input class="form-control" disabled value="<?php echo $provinsi; ?>">
							</li>
							<li>
								Kota 
								<input class="form-control" disabled value="<?php echo $kota; ?>">
							</li>
							<li>
								Kecamatan 
								<input class="form-control" disabled value="<?php echo $kecamatan; ?>">
							</li>
							<li>
								Desa 
								<input class="form-control" disabled value="<?php echo $desa; ?>">
							</li>
							<li>
								Nomor Telpon
								<input class="form-control" disabled value="<?php echo $telp; ?>">
							</li>
							<li>
								Kode pos
								<input class="form-control" disabled value="<?php echo $kodepos; ?>">
							</li>
						</ul>
						
					</div>
				</div>
				<div class="col-sm-4">
				<div class="chose_area" style="margin-right: 120px">
					<br><br>
				<ul class="user_info">
							<li class="single_field">
								Kurir :
								<input class="form-control" disabled value="<?php echo $kurir; ?>">
							</li>
							<li class="single_field">
								Layanan :
								<input class="form-control" disabled value="<?php echo $layanan; ?>">
							</li>
							<li class="single_field">
								Tarif pengiriman:
								<input class="form-control" disabled value="Rp <?php $format_indonesia = number_format ($pengiriman, 0, ',', '.');
                         			 							echo $format_indonesia; ?>">
							</li>
							<?php $totalpesan = $this->cart->total(); ?>
							<li class="single_field">
								Sub Total:
								<input class="form-control" disabled value="Rp <?php $format_indonesia = number_format ($totalpesan, 0, ',', '.');
                         			 							echo $format_indonesia; ?>">
							</li>
							<li class="single_field">
								Tarif pengiriman:
								<input class="form-control" disabled value="Rp <?php $format_indonesia = number_format ($pengiriman, 0, ',', '.');
                         			 							echo $format_indonesia; ?>">
							</li>
						</ul>
				</div>
				</div>
				<div class="col-sm-4" >
				<div class="chose_area" style="margin-left: 20px">
					<br><br>
						<ul>
							<li>
								<h4>Total</h4>
								<h3>Rp.<?php $format_indonesia = number_format ($totalpesan+$pengiriman, 0, ',', '.');
                         			echo $format_indonesia; 
																  $total_pesan = $totalpesan + $pengiriman; ?>,00-</h3>
							</li>
							<li>
								<form action="<?php echo base_url('Pesanan/insert_pesan') ; ?>" method="post">
									<input type="hidden" name="namapengirim" value="<?php echo $namapengirim; ?>">
									<input type="hidden" name="provinsi" value="<?php echo $provinsi; ?>">
									<input type="hidden" name="kota" value="<?php echo $kota; ?>">
									<input type="hidden" name="kecamatan" value="<?php echo $kecamatan; ?>">
									<input type="hidden" name="desa" value="<?php echo $desa; ?>">
									<input type="hidden" name="kodepos" value="<?php echo $kodepos; ?>">
									<input type="hidden" name="kurir" value="<?php echo $kurir; ?>">
									<input type="hidden" name="telp" value="<?php echo $telp; ?>">
									<input type="hidden" name="layanan" value="<?php echo $layanan; ?>">
									<input type="hidden" name="harga_kirim" value="<?php echo $pengiriman; ?>">
									<input type="hidden" name="total_pesan" value="<?php echo $total_pesan; ?>">
									<input type="hidden" name="idpesan" value="<?php echo $idpesan; ?>">
									<!-- <input type="hidden" name="idpesanx" value="<?php echo $idpesanx; ?>"> -->
									<input type="hidden" name="pengiriman" value="<?php echo number_format($pengiriman); ?>"><br>
									<button type="submit" style="width: 300px; height:60px;" class="btn btn-sm btn-success">Selesaikan pesanan</button>
								</form>
							<!-- <a class="btn btn-default update" href="<?php echo base_url('Pesanan/insert_pesan/'.$total_pesan.'/'.$idpesan.'/'.$id.'/'.$idpesanx.'/'.$pengiriman) ; ?>">Selesaikan pesanan</a> -->
							<!-- <a class="btn btn-default check_out" href="pesanan">Pesan</a> -->
							</li>
							</ul>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
                  
		</div>
		<!--====== FOOTER PART START ======-->
		
	</body>
		<section id="footer" class="footer-area">
			<?php $this->load->view('templates/footer') ?>
		</section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->

    <?php $this->load->view('templates/foot') ?>
    
    
    
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    
    <!--====== nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="assets/js/jquery.nice-number.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>