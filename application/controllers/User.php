<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Player_model');
        $this->load->model('Game_model');
        $this->load->model('Team_model');
        $this->load->model('Event_model');
		$this->load->library('form_validation');
    }

	public function index()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|numeric');
		if($this->form_validation->run() != false)
		{
			$this->Player_model->save();
			echo ("<script LANGUAGE='JavaScript'>
			window.location.href='http://localhost/gc/web/user/';
			window.alert('Berhasil Mendaftar !');
    		</script>");
		}
		else
		{		
			$this->load->view('landingpages');
		}
	}
	public function createtournament()
	{
		if($this->Event_model->save())
		{
			echo ("<script LANGUAGE='JavaScript'>
			window.location.href='http://localhost/gc/web/user/dashboard';
			window.alert('Mohon Menunggu Approval Dari Admin !');
    		</script>");	 
		}else{
			echo ("<script LANGUAGE='JavaScript'>
			window.location.href='http://localhost/gc/web/user/dashboard';
			window.alert('Gagal Membuat Event, Silahkan Hubungi Admin !');
    		</script>");
		};

	}
	public function reviewtournament($id_event)
	{
		$data["tournament"] = $this->Event_model->getByid_eventrow($id_event);
		$this->load->view('user/reviewtournament',$data);
	}

	public function tournament()
	{
		$data["tournament"] = $this->Event_model->getAll();
		$this->load->view('user/tournamentlist',$data);
	}
	public function logout()
    {
        $this->session->sess_destroy();
        // hancurkan semua sesi
        echo "<script>
        alert('Terimakasih !');
        window.location.href='http://localhost/gc/web/user/';
        </script>";

    }
	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
		if($this->form_validation->run() != false)
		{
			if($this->input->post()){
            	if($this->Player_model->doLogin())
            	{
				echo ("<script LANGUAGE='JavaScript'>
				window.location.href='http://localhost/gc/web/user/dashboard';
    			</script>");
				}
				else
				{
				echo ("<script LANGUAGE='JavaScript'>
				window.location.href='http://localhost/gc/web/user/';
				window.alert('Username atau Password Anda Salah!');
				</script>");
        		}
			}
		}
	}
	public function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->Player_model->searchplayer($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->username;
                echo json_encode($arr_result);
            }
        }
    }
	public function bracket()
	{
		$this->load->view('user/bracket');
	}
	public function dashboard()
	{
		$data["player"] = $this->Player_model->getByid_playerrow($this->session->userdata('id_player'));
		$data["game"] = $this->Game_model->getAll();
		$this->load->view('user/dashboard',$data);
	}
	public function comingsoon()
	{
		$this->load->view('user/comingsoon');
	}
	public function news()
	{
		$this->load->view('user/news');
	}
	public function test()
	{
		$data["team"] = $this->Team_model->teamtournament();
		echo var_dump($data);die();
	}
}
