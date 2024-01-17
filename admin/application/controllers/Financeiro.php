<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financeiro extends CI_Controller {

	public function index()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Financeiro geral';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/financeiro/geral', $query);
        $this->load->view('pages/layout/footer', $query);
	}


    public function saques()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Saques';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $query['transacoes_saque'] = $this->app->getSaques();

        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/financeiro/saque', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function depositos()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Saques';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $query['transacoes_saque'] = $this->app->getDep();
        
        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/financeiro/deposito', $query);
        $this->load->view('pages/layout/footer', $query);
	}
    public function movimentacoes()
	{
        $this->login->checkIsAdminSession();

        $query['nomepagina'] = 'Saques';
		$query['nomesistema'] =  $this->app->nomeSistema();
        $query['logo'] =  $this->app->logo();

        $query['transacoes_saque'] = $this->app->getMov();
        
        $this->load->view('pages/layout/header', $query);
        $this->load->view('pages/financeiro/movimentacoes', $query);
        $this->load->view('pages/layout/footer', $query);
	}
}
