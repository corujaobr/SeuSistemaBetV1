<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	public function ver($provedora, $game)
	{
		$this->login->checkSession();
				
		$data = array(
			'nomepagina' => 'Jogo',
			'config' => $this->app->config(),
			'provedora' => $provedora,
			'game' => $game
		); 

		//var_dump($data);
		$this->load->view('pages/layout/header', $data);
		$this->load->view('pages/welcome/game', $data);
	}
}
