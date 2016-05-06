<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){ parent::__construct(); }

	public function index(){
		$data['title'] = "Mark'UTT, site d'annonces de l'UTT";
		$this->load->view('head', $data);
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
}