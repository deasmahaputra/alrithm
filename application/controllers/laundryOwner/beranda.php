<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->view('layout/styling');
		if(!isset($_SESSION['user_logged'])){
			$this->session->set_flashdata("error","Please Loggin first to view this page");
			redirect('auth/login');
		}
	}

	public function index()
	{	
		$this->load->view('laundryOwner/header/nav_menu');
		$this->load->view('layout/laundryOwner/main-navbar');
		$this->load->view('laundryOwner/beranda');
	}
}
