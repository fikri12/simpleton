<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| DEVELOPER 	: IYAN ISYANTO
| EMAIL			: POSDARING@GMAIL.COM
|--------------------------------------------------------------------------
|
*/

class Posisikas_model extends CI_Model {

	public function save() {
		$this->db->set('no', get_kode('PK'.date('ymd'),'no','mposisikas',3));
		$this->db->set('tanggal', $this->input->post('tanggal'));
		$this->db->set('nominal', remove_comma($this->input->post('nominal')));
		$insert = $this->db->insert('mposisikas');
		if($insert) {
			$this->_save( remove_comma($this->input->post('nominal')) );
			return true;
		} else {
			return false;
		}
	}

	private function _save($nominal) {
		$this->db->set('no', get_kode('CF'.date('ymd'),'no','tcashflow',3));
		$this->db->set('tanggal', date('Y-m-d'));
		$this->db->set('debet', $nominal);
		$this->db->set('kredit', 0);
		$this->db->set('posisi', $this->_sum_posisicashflow()+$nominal);
		$this->db->set('keterangan', 'Tambah Saldo Posisi');
		return $this->db->insert('tcashflow');
	}

	private function _sum_posisicashflow() {
		$this->db->select_sum('debet','debet');
		$this->db->select_sum('kredit','kredit');
		$row = $this->db->get('tcashflow')->row();	
		return ($row->debet-$row->kredit);
	}

}

/* End of file Posisikas_model.php */
/* Location: ./application/modules/master/models/Posisikas_model.php */