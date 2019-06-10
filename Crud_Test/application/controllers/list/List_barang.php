<?php

class List_barang extends CI_Controller {
	
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
		
	}

	public function index(){
	
		$data=array(
			"title"=>'List Barang',
			"menu"=>getmenu(),
			"entry"=>$this->barang_model->view()->result(),
			"aktif"=>"list",
			"content"=>"view/index.php",
		);
	$this->breadcrumb->append_crumb('List Barang', site_url('view/list'));
		$this->load->view('template',$data);

	}

	public function laporan(){
	
		$data=array(
			"title"=>'List Barang',
			"entry"=>$this->barang_model->view()->result(),
		);
		$this->load->view('view/laporan',$data);

	}
}