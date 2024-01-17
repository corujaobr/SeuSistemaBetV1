
<?php 

class Login_model extends CI_Model {

    public function checkIsAdminSession()
	{
		if( $this->session->userdata('isAdmin') == false){
			$msg = "Você precisa estar logado para acessar esta página!";
			$this->session->set_flashdata('msg', $msg);
			$this->session->set_flashdata('tipo', "danger");

			redirect($base_url);
		}		
		   
	}
}