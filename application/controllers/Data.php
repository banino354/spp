<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	public function __construct() {
			parent::__construct();
			$this->load->model('data_model');
		}
	public function index()
	{
		$this->load->view('tab');
		$this->load->view('datasiswa');
	}
	public function datatagihan()
	{
		$this->load->view('tab');
		$this->load->view('datatagihan');
	}
	public function spp()
	{
		$this->load->view('tab');
		$this->load->view('spp');
	}

	// Siswa
	public function siswa_list()
	{
		$data = $this->data_model->siswa_list();
			echo json_encode($data);
	}
	public function save_siswa()
	{
		$data = $this->data_model->save_siswa();
			echo json_encode($data);
	}
	public function delete_siswa()
	{
		$data = $this->data_model->delete_siswa();
			echo json_encode($data);
	}
	public function edit_siswa(){
			$data=$this->data_model->edit_siswa();
			echo json_encode($data);
	}

	// Tagihan
	public function tagihan_list()
	{
		$data = $this->data_model->tagihan_list();
			echo json_encode($data);
	}
	public function save_tagihan()
	{
		$data = $this->data_model->save_tagihan();
			echo json_encode($data);
	}
	public function delete_tagihan()
	{
		$data = $this->data_model->delete_tagihan();
			echo json_encode($data);
	}
	public function edit_tagihan(){
			$data=$this->data_model->edit_tagihan();
			echo json_encode($data);
	}

	//SPP
	public function spp_list()
	{
		$data = $this->data_model->spp_list();
			echo json_encode($data);
	}
	public function spp_cari()
	{
		$data = $this->data_model->spp_cari();
			echo json_encode($data);
	}
	public function spp_tambah()
	{
		$data = $this->data_model->spp_tambah();
			echo json_encode($data);
	}
	function flag_spp(){
			$data=$this->data_model->flag_spp();
			echo json_encode($data);
		}


}

