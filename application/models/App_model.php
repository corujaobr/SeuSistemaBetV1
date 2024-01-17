
<?php 
require_once APPPATH .'models/App_extends.php';  

class App_model extends App_extends {

    public function nomeSistema()
	{
		$this->db->where('id',0);	
		return $this->db->get('config')->row()->nome;
	}
	public function logo()
	{
		$this->db->where('id',0);	
		return $this->db->get('config')->row()->logo;
	}
	public function config()
	{
		$this->db->where('id',0);	
		return $this->db->get('config')->result();
	}

}