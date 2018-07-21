<?php 
	class Data_model extends CI_Model {
		// Siswa
		function siswa_list()
		{
			$result = $this->db->get('siswa');
			return $result->result();
		}
		function save_siswa() 
		{
			$data = array(
					'no_induk' => $this->input->post('induk'),
					'nama_siswa' => $this->input->post('nama'),
					'kelas' => $this->input->post('kelas'),
					'nama_ortu' => $this->input->post('nama_ortu'),
					'alamat' => $this->input->post('alamat'),
					'telepon' => $this->input->post('telepon'),
				);
			$result = $this->db->insert('siswa', $data);
			return $result;
		}
		function delete_siswa()
		{
			$id=$this->input->post('no_induk');
			$this->db->where('no_induk', $id);
			$result=$this->db->delete('siswa');
			return $result;
		}
		function edit_siswa() {
			$id=$this->input->post('id');
			$nama=$this->input->post('nama');
			$kelas=$this->input->post('kelas');
			$nama_ortu=$this->input->post('nama_ortu');
			$alamat=$this->input->post('alamat');
			$telepon=$this->input->post('telepon');
	
			$this->db->set('nama_siswa', $nama);
			$this->db->set('kelas', $kelas);
			$this->db->set('nama_ortu', $nama_ortu);
			$this->db->set('alamat', $alamat);
			$this->db->set('telepon', $telepon);
			$this->db->where('no_induk', $id);
			$result=$this->db->update('siswa');
			return $result;
		}


		//Tagihan
		function tagihan_list()
		{
			$result = $this->db->get('kategori_tagihan');
			return $result->result();
		}		
		function save_tagihan() 
		{
			$data = array(
					'nama_bulan' => $this->input->post('bulan'),
					'tanggal_buat' => $this->input->post('tanggal'),
					'tagihan' => $this->input->post('tagihan'),
				);
			$result = $this->db->insert('kategori_tagihan', $data);
			return $result;
		}
		function delete_tagihan()
		{
			$id=$this->input->post('id_kategori');
			$this->db->where('id_kategori', $id);
			$result=$this->db->delete('kategori_tagihan');
			return $result;
		}		
		function edit_tagihan() {
			$id=$this->input->post('id');
			$bulan=$this->input->post('bulan');
			$tanggal=$this->input->post('tanggal');
			$tagihan=$this->input->post('tagihan');
	
			$this->db->set('nama_bulan', $bulan);
			$this->db->set('tanggal_buat', $tanggal);
			$this->db->set('tagihan', $tagihan);
			$this->db->where('id_kategori', $id);
			$result=$this->db->update('kategori_tagihan');
			return $result;
		}

		//SPP
		function spp_list()
		{
			//$result = $this->db->get('tagihan');
			$result = $this->db->query("SELECT t.id_tagihan, t.id_kategori, t.no_induk, t.tagihan, s.no_induk, t.flag, s.nama_siswa, k.id_kategori, k.nama_bulan FROM tagihan t, siswa s, kategori_tagihan k WHERE s.no_induk=t.no_induk AND k.id_kategori=t.id_kategori");
			return $result->result();
		}
		function spp_cari()
		{
			$siswa=$this->input->post('siswa');
			//$result = $this->db->get('tagihan');
			$result = $this->db->query("SELECT t.id_tagihan, t.id_kategori, t.no_induk, t.tagihan,t.flag, s.no_induk, s.nama_siswa, k.id_kategori, k.nama_bulan FROM tagihan t, siswa s, kategori_tagihan k WHERE s.no_induk=t.no_induk AND k.id_kategori=t.id_kategori AND s.nama_siswa LIKE '%".$siswa."%'");
			return $result->result();
		}
		function spp_tambah()
		{
			$id=$this->input->post('id');
			$tagihan=$this->input->post('tagihan');
			//$result = $this->db->get('tagihan');
			$result = $this->db->query("SELECT t.id_tagihan, t.id_kategori, t.no_induk, t.tagihan, s.no_induk, s.nama_siswa, k.id_kategori, k.nama_bulan FROM tagihan t, siswa s, kategori_tagihan k WHERE s.no_induk=t.no_induk AND k.id_kategori=t.id_kategori  AND s.nama_siswa LIKE '%".$siswa."%'");
			return $result->result();
		}
		function flag_spp() {
			$id =$this->input->post('id');
			$flag =$this->input->post('flag');

			if($flag == 'Lunas'){
				$this->db->set('flag', 0);
			}else{
				$this->db->set('flag', 1);
			}
			$this->db->where('id_tagihan', $id);
			$result=$this->db->update('tagihan');
			return $result;
		}
		
	}
 ?>