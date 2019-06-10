<?php

class Barang_model extends CI_Model{
	private $table='barang', $kd_barang='id_barang';

	public function view(){
		return $this->db->get($this->table);
	}

	public function add($data){
		$this->db->insert($this->table,$data);
	}

	public function cek_id($data){
		$this->db->where($this->kd_barang,$data);
		return $this->db->get($this->table);
	}
	public function update($data,$person){
		$this->db->where($this->kd_barang,$data);
		return $this->db->update($this->table,$person);
	}

	public function delete($id){
		$this->db->where($this->kd_barang,$id);
		return $this->db->delete($this->table);
	}
}