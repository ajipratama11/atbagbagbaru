<!doctype html>
<html lang="en">

<head>

	<?php $this->load->view('templates/head'); ?>


</head>


<header class="header-area">
	<?php $this->load->view('templates/header'); ?>
</header>
<!--====== HEADER PART ENDS ======-->

<body style="margin:20px;">
	
			<br><br><br><br>
			<!-- TABEL -->
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th>No</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Berat(Gr)/Item</th>
					<th>sub-total</th>
					<!-- <th>Aksi</th> -->
				</tr>
				<?php
				$no = 1;
				$total_berat=0; 
				foreach ($this->cart->contents() as $items) :  ?>
					<tr>
					<?php 
						$total_berat+=$items['berat']*$items['qty']; ?>
						<td><?php echo $no++ ?></td>
						<td><?php echo $items['id'] ?></td>
						<td><?php echo $items['name'] ?></td>
						<td>Rp. <?php $format_indonesia = number_format ($items['price'], 0, ',', '.');
						 echo $format_indonesia ?>,00-</td>
						<td><?php echo $items['qty'] ?></td>
						<td><?php echo $items['berat'] ?></td>
						<td>Rp. <?php $format_indonesia = number_format ($items['subtotal'], 0, ',', '.');
						 echo $format_indonesia ?>,00-</td>
						
					</tr>
				<?php endforeach; ?>
				<tr>
					<th colspan="6">Total Belanja</th>
					<!-- <th colspan="4">as</th> -->
					<th colspan="7">Rp. <?php  $format_indonesia = number_format (($this->cart->total()), 0, ',', '.'); echo $format_indonesia  ?></th>
				</tr>
			</table>

			<a href="<?php echo base_url('Landing/hapus_keranjang/')  ?>" style="width: 250px;" type="button" class="btn btn-danger">HAPUS BELANJA</a>
			<a href="<?php echo base_url('Landing'); ?>" style="width: 250px;" type="button" class="btn btn-primary">Tambah Belanja Anda</a>


			<!-- FORM UNTUK PENGISIAN DATA -->
			<div class="register-req">
				<p>Isi alamat pengiriman sesuai lokasi anda untuk mengetahui harga pengiriman serta untuk melanjutkan ke proses pemesanan</p>
			</div>
			<!--/register-req-->

			<?php foreach ($pelanggan as $a) {?>
			<div class="row">
				<div class="col-sm-3">
					<h4>Alamat Pengiriman</h4>
					<span>Nama Penerima(sesuaikan lagi) :</span>
					<input class="form-control" type="text" name="namapengirim" id="namapengirim" placeholder="*Nama lengkap anda" value="<?php echo $a->nama_kostumer ?>">
				
					<span>Provinsi :</span>
					<select class="form-control" name="propinsi_tujuan" id="propinsi_tujuan">
						<option value="" selected="" disabled="">Pilih Provinsi</option>
						<?php $this->load->view('rajaongkir/GetProvince'); ?>
					</select>
				
					<span>Kota :</span>
					<select class="form-control" name="destination" id="destination">
						<option value="" selected="" disabled="">Pilih Kota</option>
					</select>
				
					<span>Kecamatan :</span>
					<input class="form-control" type="text" name="kecamatan" id="kecamatan" placeholder="*Kecamatan">
			
					<span>Desa :</span>
					<input class="form-control" type="text" name="desa" id="desa" placeholder="*Desa">
				
					<span>No.Tlp Penerima(sesuaikan lagi) :</span>
					<input class="form-control" type="number" name="telp" id="telp" placeholder="*Nomor telepon" value="<?php echo $a->no_telp ?>">
				
					<span>Kode pos :</span>
					<input class="form-control" type="number" name="kodepos" id="kodepos" placeholder="*Kode Pos">


					<!-- <p>Alamat asal default jember</p> -->
					<div style="visibility: hidden;">
						<select class="form-control" name="propinsi_asal" id="propinsi_asal" required="required">
							<!-- <option value="" selected="" disabled="">Pilih Provinsi</option> -->
							<?php $this->load->view('rajaongkir/GetProvince2'); ?>
						</select>

						<select class="form-control" name="origin" id="origin">
							<?php $this->load->view('rajaongkir/GetCity'); ?>
						</select>
					</div>
				</div>
				<div class="col-sm-2">
				<h4>Total Berat (Gr)</h4>
					<input type="text" min="1" name="berat" id="berat" class="form-control" disabled value="<?php 
					if(empty($total_berat)){
						echo 0;
					}else{
						echo $total_berat;
					}
					?>">
					<br>
					<select class="form-control" name="courier" id="courier" required="required">
						<option value="">Pilih Kurir</option>
						<option value="jne">JNE</option>
						<option value="pos">POS</option>
						<option value="tiki">TIKI</option>
					</select>
					<br>
					<button style="width: 100%;height: 50px;" type="button" onclick="tampil_data('data')" class="btn btn-success">Cek Ongkir</button>
				</div>
				<div class="col-sm-7">
					<h4>Daftar harga pengiriman</h4>
					<div style="border: 1px solid #F0F0E9;height: 300px;">
						"Klik cek ongkir, maka data harga akan muncul disini"
						<ol>
							<div id="hasil">

							</div>
						</ol>
					</div><br>
				</div>
			</div>
		</div>
				<?php } ?>
		<!--====== FOOTER PART START ======-->

		<section id="footer" class="footer-area">
			<?php $this->load->view('templates/footer') ?>
		</section>

		<!--====== FOOTER PART ENDS ======-->

		<!--====== BACK TO TOP PART START ======-->

		<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

		<!--====== BACK TO TOP PART ENDS ======-->


		<?php $this->load->view('templates/foot') ?>


</body>

<script>
	function tampil_data(act) {
		var w = $('#origin').val();
		var x = $('#destination').val();
		var y = $('#berat').val();
		var z = $('#courier').val();
		var a = $('#namapengirim').val();
		var b = $('#kecamatan').val();
		var c = $('#desa').val();
		var d = $('#kodepos').val();
		var e = $('#telp').val();

		$.ajax({
			url: "../Rajaongkir/getCost",
			type: "GET",
			data: {
				origin: w,
				destination: x,
				berat: y,
				courier: z,
				namapengirim: a,
				kecamatan: b,
				desa: c,
				kodepos: d,
				telp: e
			},
			success: function(ajaxData) {
				//$('#tombol_export').show();
				//$('#hasilReport').show();
				$("#hasil").html(ajaxData);
			}
		});
	};
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/JQuery.min.js"></script>

<script>
	$(document).ready(function() {

		$("#propinsi_asal").click(function() {
			$.post("<?php echo base_url(); ?>index.php/Landing/getCity/" + $('#propinsi_asal').val(), function(obj) {
				$('#origin').html(obj);
			});

		});

		$("#propinsi_tujuan").click(function() {
			$.post("<?php echo base_url(); ?>index.php/Landing/getCity/" + $('#propinsi_tujuan').val(), function(obj) {
				$('#destination').html(obj);
			});

		});

		/*
		$("#cari").click(function(){
			$.post("<?php echo base_url(); ?>index.php/rajaongkir/getCost/"+$('#origin').val()+'&dest='+$('#destination').val()+'&berat='+$('#berat').val()+'&courier='+$('#courier').val(),function(obj){
				$('#hasil').html(obj);
			});
		});

		*/


	});
</script>

</html>