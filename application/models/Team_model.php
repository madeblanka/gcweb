<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Team_model extends CI_Model
{
    private $_table = "team";
	
	public $id_team;
    public $nama;
    public $ketua;
    public $anggota1;
    public $anggota2;
    public $anggota3;
    public $anggota4;
    public $poto;
    public $status;
    public $created_at;
    public $updated_at;
  
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByid_teamrow($id_team)
    {
        return $this->db->get_where($this->_table,$this, ["id_team" => $id_team])->row();
    }

    public function totalplayer()
    {
        return $this->db->count_all('player');   
    }

    public function save($data)
    {
        $post = $this->input->post();
        $this->id_team = "";
        $this->nama = $post["nama"];
        $this->ketua = $post["ketua"];
        $this->anggota1 = $post["anggota1"];
        $this->anggota2 = $post["anggota2"];
        $this->anggota3 = $post["anggota3"];
        $this->anggota4 = $post["anggota4"];
        $this->poto = $this->_uploadImage();
        $this->status = $post["status"];
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert($this->_table, $data);
    }

    public function update($id_team)
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->ketua = $post["ketua"];
        $this->anggota1 = $post["anggota1"];
        $this->anggota2 = $post["anggota2"];
        $this->anggota3 = $post["anggota3"];
        $this->anggota4 = $post["anggota4"];
 if (!empty($_FILES["poto"]["name"])) {
            $this->poto = $this->_uploadImage();
        } else {
            $this->poto = $post["old_image"];
        }
        $this->status = $post["status"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table,$this,['id_team'=>$id_team]);
    }

    public function teamtournament()
    {
        $a = print_r($this->session->userdata('id_player'));
        return $this->db->query("SELECT * FROM team WHERE ketua like '%$a%' or anggota1 like '%$a%' or anggota2 like '%$a%' or anggota3 like '%$a%' or anggota4 like '%$a%'")->result();
    }
    public function delete($id_team)
    {
        $this->db->delete($this->_table, array("id_team" => $id_team));
        return $this->db->affected_rows(); 
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './pict/teampict/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']				= 2048;
		$config['file_name']            = $this->id_team;
        $config['overwrite']			= true;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('poto')) {
        return $this->upload->data("file_name");
    }
    return "default.jpg";
    }

}