<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Painel de Administração';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $query['statistics'] = $this->app->getStatistics();
        $query['usuariostotais'] = $this->db->count_all('usuarios');

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/dashboard/dashboard', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function config()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Configurações Gerais';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $this->db->where('id',0);	
		$query['config'] =  $this->db->get('config')->result();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/config/config', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function configSave()
    {
        $this->login->checkIsAdminSession();
        
        $data = $this->input->post();
        
        if (!empty($_FILES['novaLogo']['name'])) {
            $config = array(
                'upload_path' => realpath('./../public/uploads/'),
                'allowed_types' => 'gif|jpg|png|jpeg',
                'overwrite' => TRUE,
                'file_name' => rand(5, 1000) . date('dmYHis'),
                'max_size' => '2048000'
            );
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('novaLogo')) {
                $upload_data = $this->upload->data();
                $data['logo'] = $this->engine->urlServer() . 'public/uploads/' . $upload_data['file_name'];
            } else {
                $error = $this->upload->display_errors();
            }
        }
        
        if (!empty($_FILES['novaRodapeLogo']['name'])) {
            $config = array(
                'upload_path' => realpath('./../public/uploads/'),
                'allowed_types' => 'gif|jpg|png|jpeg',
                'overwrite' => TRUE,
                'file_name' => rand(5, 1000) . date('dmYHis'),
                'max_size' => '2048000'
            );
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('novaRodapeLogo')) {
                $upload_data = $this->upload->data();
                $data['rodapelogo'] = $this->engine->urlServer() . 'public/uploads/' . $upload_data['file_name'];
            } else {
                $error = $this->upload->display_errors();
            }
        }
        if (!empty($_FILES['novoFavicon']['name'])) {
            $config = array(
                'upload_path' => realpath('./../public/uploads/'),
                'allowed_types' => 'gif|jpg|png|jpeg',
                'overwrite' => TRUE,
                'file_name' => rand(5, 1000) . date('dmYHis'),
                'max_size' => '2048000'
            );
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('novoFavicon')) {
                $upload_data = $this->upload->data();
                $data['favicon'] = $this->engine->urlServer() . 'public/uploads/' . $upload_data['file_name'];
            } else {
                $error = $this->upload->display_errors();
            }
        }
        
        $this->db->where('id', 0);
        $this->db->update('config', $data);
        
        $msg = "Configurações atualizadas com sucesso!";
        $this->session->set_flashdata('msg', $msg);
        $this->session->set_flashdata('tipo', "success");
        
        redirect('dashboard/config');
    }
    public function afiliados()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Configurações de Afiliados';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $this->db->where('id',0);	
		$query['afiliado'] =  $this->db->get('afiliados_config')->result();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/config/afiliados', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function saveAfiliados()
	{
        $this->login->checkIsAdminSession();

        $data = $this->input->post();
        
        $this->db->where('id', 0);
        $this->db->update('afiliados_config', $data);
        
        $msg = "Configurações atualizadas com sucesso!";
        $this->session->set_flashdata('msg', $msg);
        $this->session->set_flashdata('tipo', "success");
        
        redirect('dashboard/afiliados');

    }  
}
