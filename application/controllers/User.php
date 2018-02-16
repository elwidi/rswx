<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('Auth_model', 'auth');
        $this->load->model('DataTable_model', 'dt');
	}

	public function index()
	{
		$this->load->theme('Materialize-login');

		if($this->input->post('loginFormSubmit')){
			$auth = $this->auth->authLogin();
			$c_auth = count($auth);
			// var_dump($auth); exit;
			if($c_auth == 1){
				$data = array(
					'level' => $auth->Level,
					'nama' => $auth->Nama,
					'username' => $auth->User,
					'status' => 'login'
				);

				$this->session->set_userdata($data);
				redirect('user/dashboard');

			}
		}

		$this->load->view('login_page');
	}

	public function dashboard(){
		/*if ($this->session->userdata('status') == 'login') {
			$this->load->view('admin_landing');
		}*/
		$data = $this->apps->userInfo();
		$this->load->view('admin_landing', $data);

	}

	public function session_timeout() {
		$this->load->theme('Materialize-login');

		$this->load->view('session_timeout');
	}

	public function userList(){
		$data = $this->apps->userInfo();
		$data['title'] = "Daftar Pengguna";

		$this->load->view('user_list', $data);
	}

	public function user_dataTable(){
		$list = $this->dt->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$row = array();
			$row['no'] = $no;
			foreach ($field as $key => $value) {
				$row[$key] = $value;
			}
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->dt->count_all(),
			"recordsFiltered" => $this->dt->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
		exit;
	}
}
