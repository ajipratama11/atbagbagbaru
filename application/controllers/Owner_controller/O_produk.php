<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class O_produk extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_produk');
		$this->load->library('upload');
		$this->load->helper(array('url'));
		if($this->session->userdata('owner') != "333"){
			echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Admin_controller/A_login')."';
            </script>";//Url tujuan
		}
	}

	public function index(){
		$data['kategori'] = $this->M_produk->tampil_kategori();
		$data['produk'] = $this->M_produk->tampil_produk();
		// $data['produk'] = $this->M_keranjang->tampil_barang();
		$this->load->view('element/Owner/Header_owner');
		$this->load->view('Owner_view/VA_tambahproduk',$data);
		$this->load->view('element/Owner/Footer_owner');
	}
	public function insert_produk(){
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    // $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){

	        if ($this->upload->do_upload('filefoto')){
	            $gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '50%';
	            $config['width']= 600;
	            $config['height']= 400;
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $idproduk = $this->M_produk->get_idproduk();
				$nama_produk=$this->input->post('nama_produk');
				$keterangan=$this->input->post('keterangan');
				$kategori=$this->input->post('kategori');
				foreach($this->M_produk->namakat($kategori) as $row){
					$idkat=$row->id_kategori;
				}
				$stok=$this->input->post('stok');
				$harga=$this->input->post('harga');
	            $gambar='assets/images/'.$gbr['file_name'];
				$this->M_produk->tambah_produk($idproduk,$nama_produk,$keterangan,$idkat,$stok,$harga,$gambar);
				echo "<script>
	                alert('Upload berhasil');
	                window.location.href = '".base_url('Owner_controller/O_produk')."';
	            </script>";//Url tujuan
			}
			else{
				echo "<script>
	                alert('Upload gagal ukuran file terlalu besar minimal 1-2mb');
	                window.location.href = '".base_url('Produk')."';
	            </script>";//Url tujuan
			}
	                 
	    }else{
			echo "<script>
	                alert('Upload gagal');
	                window.location.href = '".base_url('Owner_controller/O_produk')."';
	            </script>";//Url tujuan
		}
	}

	function hapus_produk(){
		$id_produk= $this->uri->segment(4);
		$this->M_produk->hapus_produk($id_produk);
		redirect('Owner_controller/O_produk');
	}

	function update_produk(){
		$id_produk= $this->uri->segment(4);
		$data['kategori'] = $this->M_produk->tampil_kategori();
		$data['produk'] = $this->M_produk->tampil_produk();
		$data['produk2'] = $this->M_produk->tampil_produk2($id_produk);

		// $data['produk'] = $this->M_keranjang->tampil_barang();
		$this->load->view('element/Owner/Header_owner');
		$this->load->view('Owner_view/VA_editproduk',$data);
		$this->load->view('element/Owner/Footer_owner');
	}

	function update_produk2(){
	            $id_produk= $this->uri->segment(4);
				$nama_produk=$this->input->post('nama_produk');
				$kategori=$this->input->post('kategori');
				foreach($this->M_produk->namakat($kategori) as $row){
					$idkat=$row->id_kategori;
				}
				$keterangan=$this->input->post('keterangan');
				$stok=$this->input->post('stok');
				$harga=$this->input->post('harga');
				$this->M_produk->update_produk($id_produk,$nama_produk,$keterangan,$kategori,$stok,$harga,$idkat);
				echo "<script>
	                alert('Edit produk berhasil');
	                window.location.href = '".base_url('Owner_controller/O_produk')."';
	            </script>";//Url tujuan
	}
}
?>