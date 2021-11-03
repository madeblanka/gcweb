<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Game_model extends CI_Model
{
    private $_table = "game";
	
	public $id_game;
    public $nama;
    public $keterangan;
  
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByid_gamerow($id_game)
    {
        return $this->db->get_where($this->_table, ["id_game" => $id_game])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_game="";
        $this->nama= $post["nama"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table,$this); 
    }

    public function update($id_game)
    {
        $post = $this->input->post();
        $this->nama= $post["nama"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table,$this,['id_game'=>$id_game]);
    }

   public function delete($id_game)
    {
        return $this->db->delete($this->_table, array("id_game" => $id_game));
    }
}