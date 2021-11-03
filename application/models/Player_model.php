<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Player_model extends CI_Model
{
    private $_table = "player";
	
	public $id_player;
    public $username;
    public $password;
    public $email;
    public $no_tlp;
    public $nik;
    public $created_at;
    public $updated_at;
  
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByid_playerrow($id_player)
    {
        return $this->db->get_where($this->_table, ["id_player" => $id_player])->row();
    }
    public function searchplayer($id_player)
    {
        $this->db->select('*');
        $this->db->like('id_player', $id_player , 'both');
        $this->db->like('nama', $id_player , 'both');
        $this->db->like('username', $id_player , 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('player')->result();
    }
    public function getplayerlike($id_player)
    {
        return $this->db->query("SELECT * FROM player WHERE id_player LIKE '%$id_player%'")->result();
    }

     public function doLogin(){
		$post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = $post["password"] == $user->password;
            // jika password benar dan dia admin
            if($isPasswordTrue){ 
                // login sukses yay!
                $data_session = array(
                'id_user' => $user->id_player,
				'nama' => $user->nama,
				'username' => $user->username,
				'poto' => $user->poto
				);
 
			     $this->session->set_userdata($data_session);
                 return true;
            }

        }}
    public function totalplayer()
    {
        return $this->db->count_all('player');   
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_player="";
        $this->nama= $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->email = $post["email"];
        $this->no_tlp = $post["no_tlp"];
        $this->nik = $post["nik"];
        $this->poto = $this->_uploadImage();
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert($this->_table,$this); 
    }

    public function update($id_player)
    {
        $this->nama= $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->email = $post["email"];
        $this->no_tlp = $post["no_tlp"];
        $this->nik = $post["nik"];
        if (!empty($_FILES["poto"]["name"])) {
            $this->poto = $this->_uploadImage();
        } else {
            $this->poto = $post["old_image"];
        }
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->update($this->_table,$this,['id_player'=>$id_player]);
    }

   public function delete($id_player)
    {
        return $this->db->delete($this->_table, array("id_player" => $id_player));
    }
     private function _uploadImage()
    {
        $config['upload_path']          = './pict/profilepic/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']				= 2048;
		$config['file_name']            = $this->id_player;
        $config['overwrite']			= true;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('poto')) {
        return $this->upload->data("file_name");
    }
    return "default.jpg";
    }
}