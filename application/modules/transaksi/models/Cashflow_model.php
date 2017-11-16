<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| DEVELOPER 	: IYAN ISYANTO
| EMAIL			: POSDARING@GMAIL.COM
|--------------------------------------------------------------------------
|
*/

class Cashflow_model extends CI_Model {

	public function save() {
		$this->db->set('no', get_kode('CF'.date('ymd'),'no','tcashflow',3));
		$this->db->set('tanggal', $this->input->post('tanggal'));
		$this->db->set('debet', $this->input->post('debet'));
		$this->db->set('kredit', $this->input->post('kredit'));
		$this->db->set('posisi', $this->input->post('posisi'));
		$this->db->set('keterangan', $this->input->post('keterangan'));
		$this->db->set('staktif', 1);
		return $this->db->insert('tcashflow');
	}

	public function edit() {
		$this->db->set('no', $this->input->post('no'));
		$this->db->set('tanggal', $this->input->post('tanggal'));
		$this->db->set('debet', $this->input->post('debet'));
		$this->db->set('kredit', $this->input->post('kredit'));
		$this->db->set('posisi', $this->input->post('posisi'));
		$this->db->set('keterangan', $this->input->post('keterangan'));
		$this->db->where('no', $this->input->post('id'));
		return $this->db->update('tcashflow');
	}

	public function delete($no) {
		$this->db->set('staktif', 0);
		$this->db->where('no', $no);
		return $this->db->update('tcashflow');
	}

	public function by_id($id) {
		return $this->db->get_where('tcashflow', array('no' => $id) )->row();
	}
	

}

/* End of file Cashflow_model.php */
/* Location: ./application/modules/transaksi/models/Cashflow_model.php */