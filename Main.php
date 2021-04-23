<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
		$data = array(
			'title' => 'Halaman Utama',
		);
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}
