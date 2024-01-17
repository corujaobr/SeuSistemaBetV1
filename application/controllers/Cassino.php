<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cassino extends CI_Controller {

	public function index()
	{
		$data['nomepagina'] = 'Bem vindo!';
		$data['config'] = $this->app->config();

		$data['jogos'] =  $this->db->get('games')->result();
		$this->load->view('pages/layout/header', $data);
		$this->load->view('pages/welcome/cassino', $data);
		$this->load->view('pages/layout/footer', $data);
	}
	public function aovivo()
	{
		$data['nomepagina'] = 'Bem vindo!';
		$data['config'] = $this->app->config();

		$q = "SELECT p.name AS provider, g.game_name, g.banner, g.game_code FROM provedores p RIGHT JOIN games g ON p.code = g.provider WHERE p.type = 'live'";
		
		$data['jogos'] = $this->db->query($q)->result();

		$this->load->view('pages/layout/header', $data);
		$this->load->view('pages/welcome/cassino', $data);
		$this->load->view('pages/layout/footer', $data);
	}
}
