<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $this->load->model('Model');
		// $data['foods'] = $this->Model->getFoods();
		$this->load->view('header');
		$this->load->view('index',);
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
	}

	// public function register()
	// {
	// 	$name = $this->input->post('name');
	// 	$email = $this->input->post('email');
	// 	$password = $this->input->post('password');
	// 	$number = $this->input->post('number');

	// 	$data = array(
	// 		'name' => $name,
	// 		'email_id' => $email,
	// 		'password' => $password,
	// 		'number' => $number,
	// 		// 'user_type' => 1
	// 	);

	// 	$this->load->model('Model');

	// 	if ($this->Model->register($data)) {
	// 		redirect('/', 'refresh');
	// 		// echo "success";
	// 	};
	// }

	public function dashboard()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
	}

	public function logged()
	{
		$this->load->view('header');
		$this->load->view('logged_index');
	}

	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
	}
}
