<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pesertaevent_model extends CI_Model
{
    private $_table = "pesertaevent";
	
	public $id_peserta;
    public $id_event;
    public $id_team;
    public $created_at;
    public $updated_at;
  
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByid_pesertarow($id_peserta)
    {
        return $this->db->get_where($this->_table, ["id_peserta" => $id_peserta])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_peserta="";
        $this->id_event= $post["id_event"];
        $this->id_team = $post["id_team"];
        $this->status = $post["1"];
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert($this->_table,$this); 
    }

    public function update($id_peserta)
    {
        $this->id_event= $post["id_event"];
        $this->id_team = $post["id_team"];
        $this->status = $post["status"];
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->update($this->_table,$this,['id_peserta'=>$id_peserta]);
    }

   public function delete($id_peserta)
    {
        return $this->db->delete($this->_table, array("id_peserta" => $id_peserta));
    }
}