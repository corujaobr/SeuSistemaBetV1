<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Internal extends CI_Controller
{
  public function login()
  {
    $email =  $this->input->post('usuario');
    $pwd =  md5($this->input->post('pwd'));

    $this->db->where('usuario', $email);
    $this->db->where('senha', $pwd);
    $data['login'] = $this->db->get('admin')->result();

    if(!$data['login'] == null){

      $session['id'] = $data['login'][0]->id;
      $session['nome'] = $data['login'][0]->name;
      $session['email'] = $data['login'][0]->email;
      $session['isAdmin'] = true;

      $this->session->set_userdata($session);

      $loginData['ip'] = $this->input->ip_address();
      $loginData['ultimo_login'] = date('Y-m-d H:i:s');

      $this->db->where('id', $session['id']);
      $this->db->update('admin', $loginData);
  
      redirect($base_url.'dashboard');

    }else{
      $msg = "Usúario ou senha invalidos";
			$this->session->set_flashdata('msg', $msg);
			$this->session->set_flashdata('tipo', "danger");
      redirect($base_url.'welcome');
    }
  }
  public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
  }
 

  public function updPassword()
	{
    $id = $this->session->id;
    $data['password'] = $this->libcrypt->encode($this->input->post('rsp'));

    $this->db->where('id', $id);
    if($this->db->update('admin', $data)){
      $msg = array( 'title' => 'Atualizado!',
      'type' => 'success',
      'button' => 'OK');
      return $this->rest->get('200','OK','Sua senha foi atualizada.', $msg);
    }
  }
}

