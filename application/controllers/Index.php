<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('annonce_model');
		// $this->load->library('pagination');
	}

	public function index(){
		// $pagination_config['base_url'] = base_url();
		// $pagination_config['total_rows'] = count($this->annonce_model->getAnnonces());
		// $pagination_config['per_page'] = 2;
		// $this->pagination->initialize($pagination_config);
		
		$data['title'] = "Mark'UTT, site d'annonces de l'UTT";
		$data['annonces'] = $this->annonce_model->getAnnonces();
		// $data['pagination'] = $this->pagination->create_links();

		$this->load->view('head', $data);
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
}