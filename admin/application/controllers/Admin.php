<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
        $this->list();   
	}
    public function list()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] =  'Lista de Administradores';
        $query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();


        // Configuração da paginação
        $config['base_url'] = site_url('admin/list');
        $config['total_rows'] = $this->db->count_all_results('admin'); // Total de registros na tabela
        $config['per_page'] = 10; // Número de registros por página
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
    
        $query['admins'] = $this->db->limit($config['per_page'], $this->uri->segment($config['uri_segment']))->get('admin')->result();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/admin/list', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function create()
	{
        $this->login->checkIsAdminSession();
        $query['nomepagina'] = 'Novo Administradores';
        $query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/admin/create', $query);
        $this->load->view('pages/layout/footer', $query);
	}

    public function edit($id)
	{
        $this->login->checkIsAdminSession();
        $query['nomepagina'] = 'Editar Administradores';
        $query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $this->db->where('id', $id);
        $query['admins'] = $this->db->get('admin')->row(); 

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/admin/edit', $query);
        $this->load->view('pages/layout/footer', $query);
	}

    public function store()
	{
        $this->login->checkIsAdminSession();
        if ($this->input->post()) {

            $data = $this->input->post();
            $data['senha'] = md5($this->input->post('senha'));
            $this->db->insert('admin', $data);
            redirect('admin/list');
        } else {
            // Carregar a view de criação de usuário
            $this->load->view('admin/create');
        }
	}
    public function update($id)
	{
        if ($id !== null) {

            if ($this->input->post()) {

                $data = $this->input->post();


                $this->db->where('id', $id);
                $this->db->update('admin', $data);

                $msg = "Usuário atualizado com sucesso!";
                $this->session->set_flashdata('msg', $msg);
                $this->session->set_flashdata('tipo', "success");

                redirect('admin/list');
            } else {
                $query['admins'] = $this->db->get_where('admin', array('id' => $id))->row();

                $query['pagename'] = 'Editar usuário';

                $this->load->view('pages/layout/header', $query);
                $this->load->view('pages/admin/edit', $query);
                $this->load->view('pages/layout/footer', $query);
            }
        } else {
            redirect('admin/list');
        }
	}
}
