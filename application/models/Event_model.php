<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model
{
    private $_table = "event";
	
	public $id_event;
    public $id_user;
    public $nama;
    public $deskripsi;
    public $game;
    public $penyelenggara;
    public $komunitas;
    public $mode_turnament;
    public $lokasi;
    public $total_hadiah;
    public $max_team;
    public $poto;
    public $tgl_pendaftaran;
    public $tgl_pendaftaran_tutup;
    public $tgl_event;
    public $status;
    public $created_at;
    public $updated_at;
  
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByid_eventrow($id_event)
    {
        return $this->db->get_where($this->_table,["id_event" => $id_event])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_event ="";
        $this->id_user = $post["id_user"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->game = $post["game"];
        $this->penyelenggara = $post["penyelenggara"];
        $this->komunitas = $post["komunitas"];
        $this->mode_turnament = $post["mode_turnament"];
        $this->lokasi = $post["lokasi"];
        $this->total_hadiah = $post["total_hadiah"];
        $this->max_team = $post["max_team"];
        $this->poto = $this->_uploadImage();
        $this->tgl_pendaftaran = $post["tgl_pendaftaran"];
        $this->tgl_pendaftaran_tutup = $post["tgl_pendaftaran_tutup"];
        $this->tgl_event = $post["tgl_event"];
        $this->status ="1";
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";

        return $this->db->insert($this->_table,$this);
       
    }

    public function update($id_event)
    {
        $post = $this->input->post();
        $this->id_user = $this->session->userdata('id_user');
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->game = $post["game"];
        $this->penyelenggara = $post["penyelenggara"];
        $this->komunitas = $post["komunitas"];
        $this->mode_turnament = $post["mode_turnament"];
        $this->lokasi = $post["lokasi"];
        $this->total_hadiah = $post["total_hadiah"];
        $this->max_team = $post["max_team"];
        if (!empty($_FILES["poto"]["name"])) {
            $this->poto = $this->_uploadImage();
        } else {
            $this->poto = $post["old_image"];
        }

        $this->tgl_pendaftaran = $post["tgl_pendaftaran"];
        $this->tgl_pendaftaran_tutup = $post["tgl_pendaftaran_tutup"];
        $this->tgl_event = $post["tgl_event"];
        $this->status= $post["status"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table,$this,['id_event'=>$id_event]);
    }

   public function delete($id_event)
    {
        return $this->db->delete($this->_table, array("id_event" => $id_event));
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './pict/eventpict/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']				= 2048;
		$config['file_name']            = $this->id_event;
        $config['overwrite']			= true;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('poto')) {
        return $this->upload->data("file_name");
    }
    return "default.jpg";
    }

}