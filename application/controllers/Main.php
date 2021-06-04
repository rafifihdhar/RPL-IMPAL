<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ajax');
	}

	public function index()
	{
		$user = $this->db->get_where('usereo', ['username' => $this->session->userdata('username')])->row_array();
		$data = array(
			'title' => 'Halaman Utama',
			'user'  => $user
		);
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function viewevent($idevent)
	{
		$tampilan = $this->ajax->read($idevent);
		$like = $this->ajax->homef($idevent);
		$data = array(
			'title' => 'Halaman Event',
			'tampilan'  => $tampilan,
			'like'      => $like
		);
		$this->load->view('header', $data);
		$this->load->view('eventview', $data);
		$this->load->view('footerevent');
	}

	public function eventakun()
	{
		$event = $this->ajax->eventku($this->session->userdata('id'));
		$data = array(
			'title' => 'Halaman Event Akun',
			'event' => $event
		);
		$this->load->view('header', $data);
		$this->load->view('userevent', $data);
		$this->load->view('footerevent');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('header');
			$this->load->view('v_login');
			$this->load->view('footerevent');
		} else {
			$this->auth();
		}
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('usereo', ['username' => $username])->row_array();
		$pass = $this->db->get_where('usereo', ['password' => $password])->row_array();

		if ($user) {
			if ($pass) {
				$data = [
					'username' => $user['username'],
					'role'    => $user['role'],
					'nama'	  => $user['nama'],
					'id'	  => $user['id']
				];
				$this->session->set_userdata($data);
				redirect('main');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">invalid Username and Password</div>');
				redirect('main/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">invalid Username and Password</div>');
			redirect('main/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		redirect('main');
	}

	public function publish()
	{
		$event = $this->ajax->eventpub();
		$data = array(
			'title' => 'Halaman Event Akun',
			'event' => $event
		);
		$this->load->view('header', $data);
		$this->load->view('viewpub', $data);
		$this->load->view('footerevent');
	}
}
