<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_catatan');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

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
	public function index()
	{
		//query menampilkan quotes
		$this->db->select('quotes');
		$this->db->from('quotes');
		$this->db->order_by('id_quotes', 'DESC');
		$this->db->limit(1);
		$quotes = $this->db->get()->result();

		if ($quotes == '') {
			$this->tampil_data('');
		} else {
			$this->tampil_data($quotes);
		}
	}

	private function tampil_data($quotes)
	{
		$data['quotes'] = $quotes;
		$data['data_user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id')])->row_array();
		$data['catatan_alma'] = $this->m_catatan->tampil_alma()->result();
		$data['catatan_ade'] = $this->m_catatan->tampil_ade()->result();
		$this->load->view('header/header', $data);
		$this->load->view('index', $data);
		$this->load->view('footer/footer', $data);
	}
}
