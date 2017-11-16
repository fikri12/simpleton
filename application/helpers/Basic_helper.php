<?php

function backend_info() {
	$CI =& get_instance();
	$data = array(
		'base_url' 						=> base_url(),	
		'site_url'						=> site_url(),	
		
		'adminlte' 						=> base_url().'adminlte/',		
		'savesuccesmsg'					=> 'Data telah berhasil disimpan.',
		'updatesuccesmsg'				=> 'Data telah berhasil diubah.',
		'deletesuccesmsg'				=> 'Data telah berhasil dihapus.',
		'deleteconfirmmsg'				=> 'Apakah anda yakin ingin menghapus data?',
		'notfoundmsg'					=> 'data tidak ditemukan.',
		'leavepagemsg'					=> 'Apakah anda yakin ingin berpindah halaman ?\nData yang sudah diinputkan akan dibatalkan.',
	);
	return $data;
}

function get_kode($kode = 'KODE', $field, $tbl, $str_length=null){
	$CI =& get_instance();
	$CI->db->like($field, $kode, 'after'); 
	$CI->db->from($tbl);
	$query = $CI->db->count_all_results();
    
	if($query > 0){
		$autono = $query + 1;
		$autono = $kode.str_pad($autono, $str_length, '0', STR_PAD_LEFT);
	}else{
		$left = "";
		for ($i=1; $i<=$str_length; $i++) { $left .= "0"; }
		$left = substr($left, 0, $str_length-1)."1";
		$autono = $kode.$left;
	}
	return $autono;
}

function config($item) {
	$ian =& get_instance();
	return $ian->config->item($item);
}