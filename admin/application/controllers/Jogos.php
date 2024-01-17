<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jogos extends CI_Controller {


	public function index()
	{
        $this->list();   
	}
    public function list()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Lista de jogos';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        // Configuração da paginação
        $config['base_url'] = site_url('jogos/list');
        $config['total_rows'] = $this->db->count_all_results('games'); // Total de registros na tabela
        $config['per_page'] = 24; // Número de registros por página
        $config['uri_segment'] = 3; // Segmento da URI que contém o número da página
    
        // Estilo da paginação
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '</span></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $config['first_link'] = 'Inicio';
        $config['last_link'] = 'Final';
    
        $this->pagination->initialize($config);
    
        $query['games'] = $this->db->limit($config['per_page'], $this->uri->segment($config['uri_segment']))->get('games')->result();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/jogos/list', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function edit($id)
	{
        $this->login->checkIsAdminSession();
        $query['nomepagina'] = 'Editar usuário';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $this->db->where('id', $id);
        $query['game'] = $this->db->get('games')->row(); 

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/jogos/edit', $query);
        $this->load->view('pages/layout/footer', $query);
	}

    public function update($id)
	{


    $data = $this->input->post();

    if (!empty($_FILES['banner']['name'])) {
        $config = array(
            'upload_path' => realpath('./../public/uploads/'),
            'allowed_types' => 'gif|jpg|png|jpeg',
            'overwrite' => TRUE,
            'file_name' => rand(5, 1000) . date('dmYHis'),
            'max_size' => '2048000'
        );
        
        $this->load->library('upload');
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload('banner')) {
            $upload_data = $this->upload->data();
            $data['banner'] = $this->engine->urlServer() . 'public/uploads/' . $upload_data['file_name'];
        } else {
            $error = $this->upload->display_errors();
        }
    }

    $this->db->where('id', $id);
    $this->db->update('games', $data);

    $msg = "O Jogo foi atualizado com sucesso!";
    $this->session->set_flashdata('msg', $msg);
    $this->session->set_flashdata('tipo', "success");

    redirect('jogos');
           
	}
}
