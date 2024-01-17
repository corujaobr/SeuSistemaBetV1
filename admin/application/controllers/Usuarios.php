<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


	public function index()
	{
        $this->list();   
	}
    public function list()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Lista de usuários';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        // Configuração da paginação
        $config['base_url'] = site_url('usuarios/list');
        $config['total_rows'] = $this->db->count_all_results('usuarios'); // Total de registros na tabela
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
    
        $query['users'] = $this->db->limit($config['per_page'], $this->uri->segment($config['uri_segment']))->get('usuarios')->result();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/usuarios/list', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function create()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Novo usuário';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();


        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/usuarios/create', $query);
        $this->load->view('pages/layout/footer', $query);
	}

    public function edit($id)
	{
        $this->login->checkIsAdminSession();
        $query['nomepagina'] = 'Editar usuário';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $this->db->where('id', $id);
        $query['user'] = $this->db->get('usuarios')->row(); 

        $this->db->where('usuario', $id);
        $query['financeiro'] = $this->db->get('financeiro')->row();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/usuarios/edit', $query);
        $this->load->view('pages/layout/footer', $query);
	}

    public function store()
	{
        $this->login->checkIsAdminSession();
        if ($this->input->post()) {

            $data = $this->input->post();
            $data['senha'] = md5($this->input->post('senha'));

            $this->db->insert('usuarios', $data);
            redirect('Usuarios/list');
        } else {

            $this->load->view('Usuarios/create');
        }
	}
    public function update($id)
	{
        if ($id !== null) {

            if ($this->input->post()) {

                $data = $this->input->post();

                $this->db->where('id', $id);
                $this->db->update('usuarios', $data);

                $msg = "Usuário atualizado com sucesso!";
                $this->session->set_flashdata('msg', $msg);
                $this->session->set_flashdata('tipo', "success");

                redirect('Usuarios/list');
            } else {
                $query['user'] = $this->db->get_where('usuarios', array('id' => $id))->row();

                $query['nomepagina'] = 'Editar usuário';
		        $query['nomesistema'] =  $this->app->nomeSistema();
                $query['logo'] =  $this->app->logo();

                $this->load->view('pages/layout/header', $query);
                $this->load->view('pages/usuarios/edit', $query);
                $this->load->view('pages/layout/footer', $query);
            }
        } else {
            redirect('Usuarios/list');
        }
	}
    public function updateSaldo($id)
	{
        if ($id !== null) {

            if ($this->input->post()) {


                $saldo = $this->input->post('saldo');

                $query['financeiro'] = $this->db->get_where('financeiro', array('usuario' => $id))->row();

                $saldoAnterior = $query['financeiro']->saldo;

                $saqueUrl = $this->engine->urlServer().'/fiverscan/resetSaldo/'.$id;

                $exec = file_get_contents($saqueUrl);

                $saqueUrl = $this->engine->urlServer().'/fiverscan/enviarSaldo/'.$id.'/'.$saldo;
                
                $exec2 = file_get_contents($saqueUrl);

                $insert = array(
                    'transacao_id' => 'INTERNO '.date('dmYHis'),
                    'usuario' => $id,
                    'valor' => $valor,
                    'tipo' => 'deposito',
                    'data_hora' => date('Y-m-d H:i:s'),
                    'status' => 'pago'
                );
    
                $this->db->insert('transacoes', $insert);

                $data = array(
                    'saldo' => $saldo
                );
                $this->db->where('usuario', $id);
                $this->db->update('financeiro', $data);

                $msg = "O saldo do usuário foi atualizado com sucesso!";
                $this->session->set_flashdata('msg', $msg);
                $this->session->set_flashdata('tipo', "success");

                redirect('Usuarios/list');
            } else {
                $query['user'] = $this->db->get_where('usuarios', array('id' => $id))->row();

                $query['nomepagina'] = 'Editar usuário';
		        $query['nomesistema'] =  $this->app->nomeSistema();
                $query['logo'] =  $this->app->logo();

                $this->load->view('pages/layout/header', $query);
                $this->load->view('pages/usuarios/edit', $query);
                $this->load->view('pages/layout/footer', $query);
            }
        } else {
            redirect('Usuarios/list');
        }
	}
}
