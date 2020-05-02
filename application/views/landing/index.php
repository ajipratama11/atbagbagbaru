<!doctype html>
<html lang="en">

<head>
   
  <?php $this->load->view('templates/head'); ?>
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
    <?php $this->load->view('templates/header'); ?>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SLIDER PART START ======-->
    
    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
                <div class="single-slider">
                    <div class="slider-bg">
                       
                            
                               

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="<?php echo base_url() ?>vendor/images/slider/playmat.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>FREE<br>KESET FLANEL</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Dapatkan</span> Segera <span>!!</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Setiap pembelian Playmat secara grosir atau satuan khusus minggu ini, dapatkan free keset flanel, tanpa syarat lain dan tanpa ribet. </p>
                                        <a class="main-btn" href="<?php echo base_url('Landing') ?>">Beli Sekarang<i class="lni-chevron-right"></i></a>
                                        
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
            </div> <!-- slider active -->
        </div> <!-- container fluid -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->


    
      
       
    

    <section id="blog" class="blog-area pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">Manfaat PlayMat</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row left">
                <div class="col-md-6">
                    <div class="single-blog mt-10">
                        <div class="blog-image">
                            <img src="<?php echo base_url() ?>vendor/images/manfaatplaymate1.jpg" width="20%" height="auto" alt="Blog">
                        </div>
                       
                    </div> <!-- single blog -->
                </div>
                
                <div class="col-lg-6 col-md-6 pt-100" padding-right="100px" >
                    <div class="row right-content">
                        <h2 class="slider-title mb-10"  ><span>01</span><br> <span>|</span> <br> <span>AREA NYAMAN</span></h2>
                        <h2><p class="mb-50">Berikan area bermain yang nyaman dan nyaman untuk anda dengan playmat lembut PVC. Cocok untuk bayi 3 bulan keatas. Soft Mats sangat berguna khususnya pada fase tengkurap bayi, merangkak dan belajar berjalan. Material yang kuat tahan bertahun - tahun pemakaian. </p></h2>
                        
                    </div> <!-- slider product content -->
                </div>
                

                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="blog" class="blog-area ">
        <div class="container">
            <div class="row left">
                    <div class="col-lg-6 col-md-6 pt-100" padding-right="100pt" >
                            <div class="row right-content">
                                <h2 class="slider-title mb-10"  ><span>02</span><br> <span>|</span> <br> <span>BAHAN EMPUK</span></h2>
                                <h2><p class="mb-50">Bantalan empuk PVC soft playmat menyerap dampak benturan, melindungi bayi atau balita anda dari jatuh yang sering terjadi pada balita. anda jatuh. Desain dua sisi menampilkan karakter yang menyenangkan dan penuh warna di permukaan sisi depan dan belakang, menjadikan suasana menyenangkan untuk area bermain anaka dan menambah tampilan cantik untuk dekorasi rumah anda. </p></h2>
                                
                            </div> <!-- slider product content -->
                        </div>
                <div class="col-md-6">
                    <div class="single-blog mt-10">
                        <div class="blog-image">
                            <img src="<?php echo base_url() ?>vendor/images/manfaatplaymate2.jpg" width="20%" height="auto" alt="Blog">
                        </div>
                       
                    </div> <!-- single blog -->
                </div>
                
            <section id="blog" class="blog-area pt-70" >
                <div class="container">
                        <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center pb-25">
                                        <h3 class="title mb-15">Testimoni Customer</h3>
                                    </div> <!-- section title -->
                                </div>
                                
                        </div> <!-- row -->
                        <div class="row right-content">
                            <div class="col-md-6">
                                <img src="<?php echo base_url() ?>vendor/images/testifix.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo base_url() ?>vendor/images/testifix2.jpg" alt="">
                            </div>
                        </div>
                        </div> <!-- row -->
                    
                </div>
                    
                </div>
            </section>
                    
        <!--======  BLOG PART ENDS ======-->

     <!--====== TESTIMONIAL PART START ======-->

   

    <!--======  BLOG PART START ======-->
    <br><br><br>
    
    
    <!--======  BLOG PART ENDS ======-->


     <!--======  BLOG PART START ======-->
     <?php 
     foreach($kategori as $a) : ?>
     <section id="tas" class="blog-area pt-125">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15"><?php echo $a->nama_kategori; ?></h3>
                        <p>----------------------- </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
            <?php 
            $coba = $this->db->query("SELECT * FROM produk JOIN kategori ON produk.kategori_id_kategori=kategori.id_kategori WHERE produk.kategori_id_kategori='$a->id_kategori'")->result();
            foreach($coba as $b) : ?>
                <div class="col-md-6 col-md-6">
                    <div class="single-blog mt-30">
                        <form action="<?php echo base_url('Landing/tambah_ke_keranjang'); ?>" method="post" accept-charset="utf-8">
                        <div class="blog-image text-center">
                            <img width="500" height="340" src="<?php echo base_url($b->gambar); ?>" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h2 class="text-center"><?php echo $b->nama_produk; ?></h2>
                                <h4>Rp. <?php $format_indonesia = number_format ($b->harga, 0, ',', '.');
                                     echo $format_indonesia; ?>,00- &nbsp; <span>Sisa Stok :<?php echo $b->stok; ?>   <span></span></h4>
                              
                                <span>Beli berapa? <input class="form-control-qty" style="width: 60px" type="number" value="1" name="stok" min="1" max="<?php echo $b->stok ?>" /> <a class="btn btn-success " href="https://api.whatsapp.com/send?phone=628976350128&text=Saya%20Ingin%20bertanya%20mengenai%20produk%20ini" data-animation="fadeInUp" data-delay="1.5s" >Chat Penjual</a></span>
                                <input type="hidden"  name="id_produk"  value="<?php echo $b->id_produk ?>"/>
                                <input type="hidden"  name="harga"  value="<?php echo $b->harga ?>"/>
                                <input type="hidden" name="nama_produk"  value="<?php echo $b->nama_produk ?>"/>
                                <input type="hidden" name="berat"  value="<?php echo $b->berat ?>"/>
                                <span><button class="btn btn-primary " type="submit"  data-animation="fadeInUp" data-delay="1.5s" >Tambah Ke keranjang</button> </span>
                               
                            </div>
                        </div>
                        </form>      
                        </div>
                </div>
                               
                        <!-- </div>
                    </div> 
                </div> -->
            <?php endforeach; ?> 
           <!-- row -->
        </div> <!-- container -->
        </div>
    </section>
<?php endforeach; ?>
    
    <!--======  BLOG PART ENDS ======-->








     <!--======  BLOG PART START ======-->
    
    
    <!--======  BLOG PART ENDS ======-->








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

</html>
