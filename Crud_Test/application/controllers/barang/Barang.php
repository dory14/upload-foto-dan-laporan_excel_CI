<?php

class Barang extends CI_Controller{
	
   public function __construct(){
	parent::__construct();
		$this->load->helper('url');
		$config['tag_open'] = '<ul class="breadcrumb">';
		$config['tag_close'] = '</ul>';
		$config['li_open'] = '<li>';
		$config['li_close'] = '</li>';
		$config['divider'] = '<span class="divider"> » </span>';
		$this->breadcrumb->initialize($config);
		$this->load->model(['barang/barang_model']);
		naccess();
		levelsuper();
		
	}

	public function index(){
	
		$data=array(
			"title"=>'List Barang',
			"menu"=>getmenu(),
			"entry"=>$this->barang_model->view()->result(),
			"aktif"=>"barang",
			"content"=>"barang/index.php",
		);
	$this->breadcrumb->append_crumb('List Barang', site_url('barang/barang'));
		$this->load->view('template',$data);

	}

	public function add()
	{
		$data=array(
			"title"=>'Tambah Barang',
			"menu"=>getmenu(),
			"action"=>'barang/barang/add',
			"option"=>$this->barang_model->view()->result(),
			"aktif"=>"barang",
			"content"=>"barang/_form.php",
			"hide"=>"hidden",
			"gambar"=>'Gambar',
		);
		
		$this->validation();
		if($this->form_validation->run()){

			$foto=$_FILES['gambar']['name'];
			$dir		= "upload/";
			$dir1		= "uploads/";
			if($_FILES['gambar']['name']!=""){
				$file='gambar'; //name pada input type file
				$filename 	= $_FILES['gambar']['name'];
				$dir		= "upload/";
				$dir1		= "uploads/";
				$file		= 'gambar';
				$new_name='uploadfoto'.date('YmdHis').$_POST['nama']; //name pada input type file
				$tipe 		= $_FILES['gambar']['type'];
				$ukuran 	= $_FILES['gambar']['size'];
				$vdir_upload	= $dir;
				$file_name		= $_FILES[''.$file.'']["name"];
				$vfile_upload	= $vdir_upload.$file;
				$tmp_file		= $_FILES[''.$file.'']["tmp_name"];
				move_uploaded_file ($tmp_file, $dir.$file_name);
				date_default_timezone_get('Asia/Jakarta');
				$source_url=$dir.$file_name;
				$info=getimagesize($source_url);
				if ($ukuran < 300000 and $ukuran > 10000) {	
					$quality=100;
				}
				elseif ($ukuran < 1000000 and $ukuran > 300000) {	
					$quality=70;
				}
				elseif ($ukuran < 1500000 and $ukuran > 1000000) {	
					$quality=50;
				}
				elseif ($ukuran < 2000000 and $ukuran > 1000000) {	
					$quality=40;
				}
				elseif ($ukuran < 2500000 and $ukuran > 2000000) {	
					$quality=30;
				}
				elseif ($ukuran < 3000000 and $ukuran > 2500000) {	
					$quality=20;
				}
				elseif ($ukuran > 3000000) {	
					$quality=10;
				}else{
					$quality=10;
				}
				$gambar = imagecreatefromjpeg($source_url);
				$ext='.jpeg';
				if (imagejpeg($gambar, $dir1.$new_name.$ext, $quality)){
					unlink($source_url);
				}else{
					unlink($source_url);
				}
			}else{
				$new_name="";
				$ext="";
			}
			$data=array(
				"nm_barang"=>strtoupper($_POST['nama']),
				"harga_beli"=>$_POST['beli'],
				"harga_jual"=>$_POST['jual'],
				"stok"=>$_POST['stok'],
				"foto"=>$new_name.$ext,
			);
			$this->db->insert('barang',$data);
			
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('barang/barang');
		


			
		}else{
			$data['entry']['foto']='';
			$data['entry']['id_barang']='';
			$data['entry']['nm_barang']='';
			$data['entry']['harga_beli']='';
			$data['entry']['harga_jual']='';
			$data['entry']['stok']='';
		}
		$this->breadcrumb->append_crumb('List Barang', site_url('Barang/barang'));
		$this->breadcrumb->append_crumb('Tambah Barang ', site_url('barang/barang'));
		$this->load->view('template',$data);
	}

	public function delete($id){
		
		$getrow=$this->db->query("select * from barang where id_barang='$id'")->row_array();
		unlink("uploads/".$getrow['foto']);
		$this->barang_model->delete($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('barang/barang');
	}

	public function update($id){
		$this->validation();
		$data=array(
			"title"=>'Edit Data',
			"menu"=>getmenu(),
			"action"=>'barang/barang/update/'.$id,
			"option"=>$this->barang_model->view()->result(),
			"aktif"=>"barang",
			"content"=>"barang/_form.php",
			"hide"=>"",
			"gambar"=>"Gambar (baru)",
		);
		$getrow=$this->db->query("select * from barang where id_barang='$id'")->row_array();
		$this->validation();
		if($this->form_validation->run()){
			$foto=$_FILES['gambar']['name'];
			$dir		= "upload/";
			$dir1		= "uploads/";
			if($_FILES['gambar']['name']!=""){
				$file='gambar'; //name pada input type file
				$filename 	= $_FILES['gambar']['name'];
				$dir		= "upload/";
				$dir1		= "uploads/";
				$file		= 'gambar';
				$new_name='uploadfoto'.date('YmdHis').$_POST['nik']; //name pada input type file
				$tipe 		= $_FILES['gambar']['type'];
				$ukuran 	= $_FILES['gambar']['size'];
				$vdir_upload	= $dir;
				$file_name		= $_FILES[''.$file.'']["name"];
				$vfile_upload	= $vdir_upload.$file;
				$tmp_file		= $_FILES[''.$file.'']["tmp_name"];
				move_uploaded_file ($tmp_file, $dir.$file_name);
				date_default_timezone_get('Asia/Jakarta');
				$source_url=$dir.$file_name;
				$info=getimagesize($source_url);
				if ($ukuran < 300000 and $ukuran > 10000) {	
					$quality=100;
				}
				elseif ($ukuran < 1000000 and $ukuran > 300000) {	
					$quality=70;
				}
				elseif ($ukuran < 1500000 and $ukuran > 1000000) {	
					$quality=50;
				}
				elseif ($ukuran < 2000000 and $ukuran > 1000000) {	
					$quality=40;
				}
				elseif ($ukuran < 2500000 and $ukuran > 2000000) {	
					$quality=30;
				}
				elseif ($ukuran < 3000000 and $ukuran > 2500000) {	
					$quality=20;
				}
				elseif ($ukuran > 3000000) {	
					$quality=10;
				}else{
					$quality=10;
				}
				$gambar = imagecreatefromjpeg($source_url);
				$ext='.jpeg';
				if (imagejpeg($gambar, $dir1.$new_name.$ext, $quality)){
					unlink($source_url);
				}else{
					unlink($source_url);
				}
				unlink("uploads/".$getrow['foto']);
			}else{
				$new_name=$getrow['foto'];
				$ext="";
			}
			$data=array(
				"nm_barang"=>strtoupper($_POST['nama']),
				"harga_beli"=>$_POST['beli'],
				"harga_jual"=>$_POST['jual'],
				"stok"=>$_POST['stok'],
				"foto"=>$new_name.$ext,
			);
			$this->db->where('id_barang',$_POST['id']);
			$this->db->update('barang',$data);
			$this->db->where('id_barang', $_POST['id']);
		
			$this->session->set_flashdata('sukses',"Data Berhasil Di Update");
			redirect('barang/barang');
		}else{
					$data['entry']=$this->barang_model->cek_id($id)->row_array();
					
					
		}
		$this->breadcrumb->append_crumb('List Barang', site_url('Barang/barang'));
		$this->breadcrumb->append_crumb('Update Barang ', site_url('Barang/barang'));
		$this->load->view('template',$data);

	}

	public function validation()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('beli', 'beli', 'required|numeric');
		$this->form_validation->set_rules('jual', 'jual', 'required|numeric');
		$this->form_validation->set_rules('stok', 'stok', 'required|numeric');
		
		
	}
}