<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()

	{
		$partner = $this->input->get('ref'); // Obtém o parâmetro GET 'parametro'
        $data['partner'] = $partner;

		$data['nomepagina'] = 'Bem vindo!';
		$data['config'] = $this->app->config();
		$data['populares'] = $this->db->get('populares')->result();

		$query = "SELECT * FROM games WHERE game_name like '%Roulette%' LIMIT 24;";

		$data['aovivo'] = $this->db->query($query)->result();

		$queryAll = "SELECT * FROM games WHERE provider = 'PGSOFT' LIMIT 24;";
		
		$data['jogos'] = $this->db->query($queryAll)->result();

		$data['banners'] =  $this->db->get('banner')->result();

		$this->load->view('pages/layout/header', $data);
		$this->load->view('pages/welcome/home', $data);
		$this->load->view('pages/layout/footer', $data);
	}
}
