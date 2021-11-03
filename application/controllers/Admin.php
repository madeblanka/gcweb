<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Player_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
		$this->load->view('admin/dashboard');
	}
	public function match()
	{
		$this->load->view('admin/match/bracket');
	}
    public function indexplayer()
    {
        $data['player'] = $this->Player_model->getAllPLayer();
        $this->load->view('admin/player/index',$data);
    }
    	
	public function editplayer($id_player = null)
	{	
            $data['player'] = $this->Player_model->getByid_player($id_player);
			$this->load->view('admin/player/edit',$data);
	}
    public function updateplayer()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|numeric');
		$this->Player_model->editPlayer($id_player);
			redirect(base_url('admin/indexplayer'));
    }
}
