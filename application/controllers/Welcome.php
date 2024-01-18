<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('home');
		// $data['name'] =$this->input->post('name');
		
		
		
		
		
		
		$data['all'] = $this->home->alldata();
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('main', $data);
		$this->load->view('footer');
	}
	public function insert_data()
	{
		print_r($_POST);

		$this->load->model('home');
		$data['name'] =$this->input->post('name');

		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['district']=$this->input->post('district');
		$data['assembly']=$this->input->post('assembly');
		$data['facebook']=$this->input->post('facebook');
		$data['twitter']=$this->input->post('twitter');
		$data['instagram']=$this->input->post('instagram');

		$this->home->insert_data($data); 
	}
}

