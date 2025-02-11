<?php

class Home extends CI_Controller{
	public function index()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/home");
		$this->load->view("depan/footer");
	}

	public function program()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/program");
		$this->load->view("depan/footer");
	}

	public function kabar()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/kabar");
		$this->load->view("depan/footer");
	}


	public function khazanah()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/khazanah");
		$this->load->view("depan/footer");
	}

	public function pfi()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/pfi");
		$this->load->view("depan/footer");
	}

	public function registrasi()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/registrasi");
		$this->load->view("depan/footer");
	}

	public function login()
	{
		if($this->session->userdata('sess_member_fi') == false){
			$data['LANG']	= GET_CURRENT_LANG();
			
			$this->load->view("depan/header");
			$this->load->view("depan/login", $data);
			$this->load->view("depan/footer");
		}else{
			redirect('member');
		}
	}

	public function acara()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/acara");
		$this->load->view("depan/footer");
	}

	public function berita()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/berita");
		$this->load->view("depan/footer");
	}

	public function keanggotaan()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/keanggotaan");
		$this->load->view("depan/footer");
	}

	public function luar()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/luar");
		$this->load->view("depan/footer");
	}

	public function sejarah()
	{
		$data['sejarah'] = $this->db->order_by('posts_uid', 'DESC')->get_where('cd_posts', ['posts_title'=>'Sejarah'])->row();
		
		$this->load->view("depan/header");
		$this->load->view("depan/sejarah", $data);
		$this->load->view("depan/footer");
	}

	public function siapakami()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/siapakami");
		$this->load->view("depan/footer");
	}

	public function tujuan()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/tujuan");
		$this->load->view("depan/footer");
	}

	public function visimisi()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/visimisi");
		$this->load->view("depan/footer");
	}

	public function galeri()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/galeri");
		$this->load->view("depan/footer");
	}

	public function pedoman()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/pedoman");
		$this->load->view("depan/footer");
	}

	public function peta()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/peta");
		$this->load->view("depan/footer");
	}

		public function mitra()
	{
		$this->load->view("depan/header");
		$this->load->view("depan/mitra");
		$this->load->view("depan/footer");
	}
}

