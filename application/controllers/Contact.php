<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/contact');
		$this->load->view('template/footer');
		
	}
}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */