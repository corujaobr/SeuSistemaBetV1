
<?php 

class Login_model extends CI_Model {

    public function checkSession()
	{
		if( $this->session->userdata('logged') == false){
			$msg = "Você precisa estar logado para acessar esta página!";
			$this->session->set_flashdata('msg', $msg);
			$this->session->set_flashdata('tipo', "danger");

			redirect ('');
		}		
		   
	}
	public function checkIsAdminSession()
	{
		if($this->session->userdata('logged') == false || $this->session->userdata('is_admin') != 1){

			$msg = "Você precisa ser admin para logar essa pagina!";
			$this->session->set_flashdata('msg', $msg);
			$this->session->set_flashdata('tipo', "danger");

			redirect ('');
		}		
		   
	}

}