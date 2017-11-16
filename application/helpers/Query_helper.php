<?php 

function get_all($table) {
	$CI =& get_instance();
	return $CI->db->get($table)->result();
}

function get_all_where($table, $where = array()) {
	$CI =& get_instance();
	return $CI->db->get_where($table, $where)->result();	
}

function get_by_id($table, $where = array()) {
	$CI =& get_instance();
	return $CI->db->get_where($table, $where)->row();	
}