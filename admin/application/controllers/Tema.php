<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tema extends CI_Controller {

	public function index()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Editar Tema';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        
        $this->db->where('id',0);	
		$query['config'] =  $this->db->get('tema')->result();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/outros/tema', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function save()
	{
        $this->login->checkIsAdminSession();

        $data = $this->input->post();

        $this->db->where('id', 0);
        $this->db->update('tema', $data);

        $msg = "Configurações atualizadas com sucesso!";
        $this->session->set_flashdata('msg', $msg);
        $this->session->set_flashdata('tipo', "success");

        redirect('tema');
	}
    public function banners()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Adicionar/Remover Banners';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

    	
		$query['banners'] =  $this->db->get('banner')->result();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/outros/banners', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function salvarBanner()
	{
            $this->login->checkIsAdminSession();
            
            $data = $this->input->post();
            
            if (!empty($_FILES['image']['name'])) {
                $config = array(
                    'upload_path' => realpath('./../public/uploads/'),
                    'allowed_types' => 'gif|jpg|png|jpeg',
                    'overwrite' => TRUE,
                    'file_name' => rand(5, 1000) . date('dmYHis'),
                    'max_size' => '2048000'
                );
                
                $this->load->library('upload');
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data();
                    $data['image'] = $this->engine->urlServer() . 'public/uploads/' . $upload_data['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                }
            }
            

        $this->db->insert('banner', $data);

        $msg = "Banner salvo com sucesso!";
        $this->session->set_flashdata('msg', $msg);
        $this->session->set_flashdata('tipo', "success");

        redirect('tema/banners');
	}
    public function deletarBanner($id) {
        $this->db->where('id', $id);
        $this->db->delete('banner');

        $mensagem = "Atenção: banner apagado com sucesso" ;
        $this->session->set_flashdata('msg', $mensagem);
        $this->session->set_flashdata('tipo', "success");

        redirect('tema/banners');
    }
}