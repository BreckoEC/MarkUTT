<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function assets_url(){ return base_url().'assets/'; }

	public function head($title="Mark'UTT, site d'annonces de l'UTT"){
		$data['title'] = $title;
		$data['assets_url'] = assets_url();
		$this->load->view('head');
	}
}
