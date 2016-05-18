<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonce_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getAnnonces(){
		$query = $this->db->get_where('annonce', array('active' => true));
		return $query->result_array();
	}

}