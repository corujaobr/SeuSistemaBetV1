<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fiverscan extends CI_Controller {

	public function index()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'API (Fiverscan)';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        
        $this->db->where('id',0);	
		$query['config'] =  $this->db->get('fiverscan')->result();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/outros/fiverscan', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function save()
	{
        $this->login->checkIsAdminSession();

        $data = $this->input->post();

        $this->db->where('id', 0);
        $this->db->update('fiverscan', $data);

        $msg = "Configurações atualizadas com sucesso!";
        $this->session->set_flashdata('msg', $msg);
        $this->session->set_flashdata('tipo', "success");

        redirect('Fiverscan');
	}
}
