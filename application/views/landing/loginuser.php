<!DOCTYPE html>
<html lang="en">

<head>
   
  <?php $this->load->view('templates/head'); ?>
  
  
</head>

<body>
	
<header class="header-area">
    <?php $this->load->view('templates/header2'); ?>
    </header>
<br><br><br><br><br><br><br>
	
<section><!--form-->
		<div class="container" >
			<div class="row justify-content-center">
				<div class="col-sm-4 col-sm-offset-2">
					<!--login form-->
					<div class="login-form" style="background-color: #F0F0E9;padding: 50px;">
						<h5 style="color: green;"><strong>LOGIN</strong></h5>
						<form action="<?php echo base_url('Landing_controller/login/login'); ?>" method="post">
							<input class="form-control" style="background-color: white;" type="email" placeholder="Email" name="email" required="required" /><br>
							<input class="form-control" style="background-color: white;" type="password" placeholder="Password" name="password" required="required" />
							<a style="margin-left: 145px" href="" data-toggle="modal" data-target="#newMenuModal"><span style="color: red">Lupa Password?</span></a>
							<span>
								<input style="background-color: white;" type="checkbox" class="checkbox" required="required"> 
								Biarkan tetap masuk
							</span>
                            <br><br>
							<button type="submit" class="btn btn-sm btn-success">Masuk</button>
						</form><br>
						
						<a  href="<?php echo base_url('Admin_controller/A_login'); ?>"><p style="color: blue">Anda adalah Admin atau Owner?, Login disini!</p></a><br/>
					</div><!--/login form-->
				</div>

                <div class="col-sm-1 col-sm-offset-3">
                    <h5 class="or"></h5>
                </div>
			
				<div class="col-sm-4">
					<!--sign up form-->
					<div class="signup-form" style="background-color: #F0F0E9;padding: 50px;">
						<h5 style="color: green;"><strong>REGISTER</strong></h5>
						<form action="<?php echo base_url('Landing_controller/Login/register'); ?>" method="post">
							<input class="form-control" style="background-color: white;" type="text" placeholder="Nama" name="nama" /><br>
							<input class="form-control" style="background-color: white;" type="email" placeholder="Alamat email" name="email"><br>
							<input class="form-control" style="background-color: white;" type="number" placeholder="No telp" name="telp"><br>
							<input class="form-control" style="background-color: white;" type="password" placeholder="Kata Sandi" name="password" /><br>
							<button type="submit" class="btn btn-sm btn-success">Daftar</button>
						</form><br>
						
					</div><!--/sign up form-->
				</div>
				<!-- button login admin -->
			</div>
		</div><br><br>
		
	</section><!--/form-->
	<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Perbarui Passwword</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('Landing_controller/Login/ubahpassword') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_kostumer" name="nama_kostumer" placeholder="Nama">
					</div>
					<br>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<br>
					<div class="form-group">
                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Telp">
					</div>
					<br>
					<div class="form-group">
                        <input type="text" class="form-control" id="password1" name="password1" placeholder="Password Baru">
					</div>
					<br>
					<div class="form-group">
                        <input type="text" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Ubah Password</button>
                </div>
            </form>
        </div>
    </div>
</div> 
	

	<!-- fungsi inputan hanya angka -->
	<script>
		                function hanyaAngka(evt) {
		                 var charCode = (evt.which) ? evt.which : event.keyCode
		                   if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                        return true;
                      }
                    </script>


    <section id="footer" class="footer-area">
       <?php $this->load->view('templates/footer') ?>
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
    <?php $this->load->view('templates/foot') ?>

</body>
</html>

