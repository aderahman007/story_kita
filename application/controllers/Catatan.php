<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_catatan');
		$this->load->library('form_validation');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}


	public function index()
	{
		$data['data_user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id')])->row_array();
		$this->load->view('header/header', $data);
		$this->load->view('tambah_catatan', $data);
		$this->load->view('footer/footer', $data);
	}

	public function tambah_catatan()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		$this->form_validation->set_rules('isi_story', 'Isi Story', 'required|trim');

		if ($this->form_validation->run() == false) {
			# code...
			$data['data_user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id')])->row_array();
			$this->load->view('header/header', $data);
			$this->load->view('tambah_catatan', $data);
			$this->load->view('footer/footer', $data);
		} else {

			$nama =
				$this->db->get_where('user', ['id_user' => $this->session->userdata('id')])->row_array();

			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi_story');
			$penulis = $nama['username'];
			$tanggal = date("Y-m-d H:i:s");

			$data = array(
				'judul_catatan' => $judul,
				'isi_catatan' => $isi,
				'tgl_catatan' => $tanggal,
				'penulis' => $penulis
			);
			$this->m_catatan->tambah($data, 'catatan');

			//send Email
			$this->_sendEmail('story');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Story berhasil ditambahkan</div>');
			redirect('welcome');
		}
	}

	public function tampil_detail_catatan($id)
	{
		$data['data_user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id')])->row_array();
		$data['detail'] = $this->m_catatan->tampil_detail($id)->result();
		$this->load->view('header/header', $data);
		$this->load->view('content', $data);
		$this->load->view('footer/footer', $data);
	}

	public function quotes()
	{
		$data['data_user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id')])->row_array();

		$this->load->view('header/header', $data);
		$this->load->view('tambah_quotes', $data);
		$this->load->view('footer/footer', $data);
	}

	public function tambah_quotes()
	{
		$this->form_validation->set_rules('isi_quotes', 'Isi Quotes', 'required|trim');

		if ($this->form_validation->run() == false) {
			# code...
			$this->quotes();
		} else {

			$nama = $this->db->get_where('user', ['id_user' => $this->session->userdata('id')])->row_array();

			$isi_quotes = $this->input->post('isi_quotes');
			$penulis = $nama['username'];
			$tanggal = date("Y-m-d H:i:s");

			$data = array(
				'quotes' => $isi_quotes,
				'penulis' => $penulis,
				'tanggal' => $tanggal

			);
			$this->db->insert('quotes', $data);

			//send email
			$this->_sendEmail('quotes');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Quotes berhasil ditambahkan</div>');
			redirect('welcome');
		}
	}

	//Fungsi kirim Email
	private function _sendEmail($type)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'storykita12@gmail.com',
			'smtp_pass' => 'Storykita@11',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->load->library('email', $config);

		//$this->email->initialize($config);

		$this->email->from('storykita12@gmail.com', 'Notifikasi Story Kita');

		$user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id')])->row_array();
		if ($user['username'] == 'alma') {

			$this->email->to('aderahman9908@gmail.com');

			if ($type == 'quotes') {
				$this->email->subject('Notifikasi Story Kita');
				$this->email->message('Alma Shobrina Telah Menambahkan Quotes Baru Silahkan Login ke <a href="www.storykita.rf.gd">www.storykita.rf.gd</a> untuk Melihat Quotes');
			} else if ($type == 'story') {
				$this->email->subject('Notifikasi Story Kita');
				$this->email->message('Alma Shobrina Telah Menambahkan Story Baru Silahkan Login ke <a href="www.storykita.rf.gd">www.storykita.rf.gd</a> untuk Melihat Story');
			}

			if ($this->email->send()) {
				return true;
			} else {
				echo $this->email->print_debugger();
				die;
			}
		} elseif ($user['username'] == 'ade') {
			$this->email->to('almashobrina30@gmail.com');

			if ($type == 'quotes') {
				$this->email->subject('Notifikasi Story Kita');
				$this->email->message('Ade Rahman Telah Menambahkan Quotes Baru Silahkan Login ke <a href="www.storykita.rf.gd">www.storykita.rf.gd</a> untuk Melihat Quotes');
			} else if ($type == 'story') {
				$this->email->subject('Notifikasi Story Kita');
				$this->email->message('Ade Rahman Telah Menambahkan Story Baru Silahkan Login ke <a href="www.storykita.rf.gd">www.storykita.rf.gd</a> untuk Melihat Story');
			}

			if ($this->email->send()) {
				return true;
			} else {
				echo $this->email->print_debugger();
				die;
			}
		}
	}
}
