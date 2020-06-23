<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{
		if ($this->session->userdata('status') == "login") {
			redirect(base_url("Welcome"));
		}
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($cek) {
			# code...
			if (md5($password, $cek['password'])) {
				# code...
				$data_session = array(
					'id' => $cek['id_user'],
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect('welcome');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password yang anda masukan salah!</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
			redirect('login');
		}
		// $where = array(
		// 	'username' => $username,
		// 	'password' => md5($password)
		// );
		// $cek = $this->m_login->cek_login("user", $where)->row();
		// if($cek > 0){
		// 	$data_session = array(
		// 		'id' => $cek->id_user,
		// 		'nama' => $cek->username,
		// 		'status' => "login",
		// 	);

		// 	$this->session->set_userdata($data_session);
		// 	redirect(base_url("Welcome"));
		// }else{
		// 	echo "Username dan password salah bro";
		// }
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
