<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fiverscan extends CI_Controller {


    private function enviarRequest($url, $config) {
        $ch = curl_init();

        $headerArray = ['Content-Type: application/json'];
        // Configurando as opções do cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $config);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArray);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Executando a requisição e obtendo a resposta
        $response = curl_exec($ch);

        // Fechando a conexão cURL
        curl_close($ch);

        return $response;
    }

    private function getKeys(){
        $this->db->where('id',0);	
        $fiverData = $this->db->get('fiverscan')->result();

        $data = array(
            'url' => $fiverData[0]->url,
            'agent_code' => $fiverData[0]->agent_code,
            'agent_token' => $fiverData[0]->agent_token
        );

        return $data;
    }

    public function obterProvedores() {

        $keys = $this->getKeys();

        $url = $keys['url']; 

        $data = array(
            'method' => 'provider_list',
            'agent_code' => $keys['agent_code'],
            'agent_token' => $keys['agent_token'] 
        );

        $json_data = json_encode($data);


        // Fazendo a requisição POST
        $response = $this->enviarRequest($url, $json_data);

        // Exibindo a resposta
        $dados = json_decode($response, true);

        if ($dados && isset($dados['status']) && $dados['status'] == 1 && isset($dados['providers'])) {
            foreach ($dados['providers'] as $provedor) {
                // Insere cada provedor na tabela 'provedores'
                $dados_provedor = array(
                    'code' => $provedor['code'],
                    'name' => $provedor['name'],
                    'type' => $provedor['type'],
                    'status' => $provedor['status']
                );

                $this->db->insert('provedores', $dados_provedor);
                $this->obterJogos($provedor['code']);
            }

            echo "A lista de provedores foi atualizada com sucesso!";
        } else {
            echo "Os dados da API estão incorretos ou o status não é 1.";
        }
    }

    public function obterJogos($provedor) {
        $keys = $this->getKeys();

        $url = $keys['url']; 

        $data = array(
            'method' => 'game_list',
            'agent_code' => $keys['agent_code'],
            'agent_token' => $keys['agent_token'], 
            "provider_code" =>  $provedor
        );

        $json_data = json_encode($data);


        // Fazendo a requisição POST
        $response = $this->enviarRequest($url, $json_data);

        // Exibindo a resposta
        $dados = json_decode($response, true);

        if ($dados && isset($dados['status']) && $dados['status'] == 1 && isset($dados['games'])) {
            foreach ($dados['games'] as $games) {
                // Insere cada provedor na tabela 'provedores'
                $dados_provedor = array(
                    'game_code' => $games['game_code'],
                    'game_name' => $games['game_name'],
                    'banner' => $games['banner'],
                    'status' => $games['status'],
                    'provider' => $provedor
                );

                $this->db->insert('games', $dados_provedor);
            }

            echo "A lista de games foi carregada com sucesso!";
        } else {
            echo "Os dados da API estão incorretos ou o status não é 1.";
        }
    }


   

    public function enviarSaldo($id, $saldo){

        $keys = $this->getKeys();

        $url = $keys['url']; 

        $query['user'] = $this->db->get_where('usuarios', array('id' => $id))->row();

        $num = floatval($saldo);

        // Dados para o corpo da requisição em formato JSON
        $data = array(
            'method' => 'user_deposit',
            'agent_code' => $keys['agent_code'],
            'agent_token' => $keys['agent_token'], 
            'user_code' => $query['user']->email,
            "amount" => $num
        );

        $json_data = json_encode($data);


        // Fazendo a requisição POST
        $response = $this->enviarRequest($url, $json_data);

        // Exibindo a resposta

        $data = json_decode($response, true);

        echo $response;

    }

    public function resetSaldo($id){

        $keys = $this->getKeys();

        $query['user'] = $this->db->get_where('usuarios', array('id' => $id))->row();

        $url = $keys['url']; 

        // Dados para o corpo da requisição em formato JSON
        $data = array(
            'method' => 'user_withdraw_reset',
            'agent_code' => $keys['agent_code'],
            'agent_token' => $keys['agent_token'], 
            'user_code' => $query['user']->email
        );

        $json_data = json_encode($data);


        // Fazendo a requisição POST
        $response = $this->enviarRequest($url, $json_data);

        // Exibindo a resposta

        $data = json_decode($response, true);

    }
    public function pegarSaldo(){

        $id = $this->session->id;
        $query['user'] = $this->db->get_where('usuarios', array('id' => $id))->row();
        
        if($this->session->logged == false){
            echo "Usuário não logado!";
        } else {
            $keys = $this->getKeys();
            $url = $keys['url']; 
    
            // Dados para o corpo da requisição em formato JSON
            $data = array(
                'method' => 'money_info',
                'agent_code' => $keys['agent_code'],
                'agent_token' => $keys['agent_token'], 
                'user_code' =>  $query['user']->email
            );
    
            $json_data = json_encode($data);
    
            // Fazendo a requisição POST
            $response = $this->enviarRequest($url, $json_data);
    
            // Exibindo a resposta
            $dados = json_decode($response, true);
    
            if (!empty($dados)) {
                if ($dados['status'] === 0) {
                    echo $this->session->saldo;
                } else {
                    $novoSaldo = $dados['user']['balance'];
                    $this->db->set('saldo', $novoSaldo);
                    $this->db->where('usuario', $this->session->id);
                    $this->db->update('financeiro');
                    $this->session->set_userdata('saldo', $novoSaldo);
                    echo floatval($novoSaldo);
                }
            } else {
                echo $this->session->saldo;
            }
        }
    }
    

    

    

    public function pegarLinkJogo($provedor,$game){

        $keys = $this->getKeys();

        $url = $keys['url']; 

        // Dados para o corpo da requisição em formato JSON
        $data = array(
            'method' => 'game_launch',
            'agent_code' => $keys['agent_code'],
            'agent_token' => $keys['agent_token'], 
            'user_code' => $this->session->email,
            "provider_code" => $provedor,
            "game_code" => $game,
            "lang" =>  "pt"
        );

        $json_data = json_encode($data);


        // Fazendo a requisição POST
        $response = $this->enviarRequest($url, $json_data);
        $data = json_decode($response, true);


        $games = array('gameURL' => $data['launch_url'],
                        'gameName' => $game);

        echo json_encode($games);

    }

}
