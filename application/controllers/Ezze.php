<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ezze extends CI_Controller {

    private function enviarRequest($url, $header, $data=null) {
        $ch = curl_init();

    
        $data_json = json_encode($data);

        // Configurando as opções do cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        if(!$data == null){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Executando a requisição e obtendo a resposta
        $response = curl_exec($ch);

        // Fechando a conexão cURL
        curl_close($ch);

        return $response;
    }
    private function requestToken($url, $header, $data) {
        $ch = curl_init();

        // Configurando as opções do cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Executando a requisição e obtendo a resposta
        $response = curl_exec($ch);

        // Fechando a conexão cURL
        curl_close($ch);

        return $response;
    }

    public function obterToken() {
        $this->db->where('id',0);	
        $ezzeData = $this->db->get('ezzebank')->result();

        $url = $ezzeData[0]->url.'/oauth/token';
        $client_id = $ezzeData[0]->client_id;
        $client_secret = $ezzeData[0]->client_secret;

        $b64token = base64_encode($client_id.':'.$client_secret);

        $data = array(
            'grant_type' => 'client_credentials'
        );

        $authorization = 'Basic '.$b64token;

        $header = array(
            'Authorization: ' . $authorization
        );

        $response = $this->requestToken($url, $header, $data);

        
        $dados = json_decode($response, true);

        if($dados['access_token']){
            $access_token = $dados['access_token'];
            $this->session->set_userdata('access_token', $access_token);
        }else{
            echo "Erro: ". $dados['message'];
        }

    }
    public function criarQrCode() {

        $this->obterToken();

        $valor = $this->input->post('field');

        $this->db->where('id',0);	
        $ezzeData = $this->db->get('ezzebank')->result();


        $url = $ezzeData[0]->url.'/pix/qrcode';

        $data = array(
            'amount' => $valor,
            'payerQuestion' => 'Recarga saldo plataforma de jogos',
            'payer' => array(
                'name' => $this->session->nome,
                'document' => $this->engine->cpf($this->session->cpf)
            )
        );


        $header = array(
            'Authorization: Bearer ' . $this->session->access_token
        );

        $response = $this->enviarRequest($url, $header, $data);

        
        $dados = json_decode($response, true);

        if($dados['transactionId']){

            $insert = array(
                'transacao_id' => $dados['transactionId'],
                'usuario' => $this->session->id,
                'valor' => $valor,
                'tipo' => 'deposito',
                'data_hora' => date('Y-m-d H:i:s'),
                'qrcode' => $dados['base64image'],
                'status' => 'processamento',
                'code' =>  $dados['emvqrcps']
            );

            $this->db->insert('transacoes', $insert);

            $this->session->set_userdata('transacao_id', $dados['transactionId']);

            echo $this->engine->output('200', $insert);

        }else{
            echo "Erro: ". $dados['message'];
        }
    }
    public function statusPix(){

        $this->obterToken();

        $transactionId = $this->session->transacao_id;

        $this->db->where('id',0);	
        $ezzeData = $this->db->get('ezzebank')->result();


        $url = $ezzeData[0]->url.'/pix/qrcode/'.$transactionId.'/detail';

        $header = array(
            'Authorization: Bearer ' . $this->session->access_token
        );

        $response = $this->enviarRequest($url, $header);

        
        $dados = json_decode($response, true);

            if($dados['status'] == 'APPROVED'){

                $insert = array(
                    'transacao_id' => $dados['transactionId'],
                    'status' => 'pago'
                );
                $this->db->where('transacao_id', $dados['transactionId']);
                $this->db->update('transacoes', $insert);

                $int_url = $base_url.'/fiverscan/enviarSaldo/'.$dados['amountPaid'];

                $exec = file_get_contents($int_url);

                echo json_encode($insert);
            }else{
                $insert = array(
                    'transacao_id' => $dados['transactionId'],
                    'status' => $dados['status'] 
                );



                echo $this->engine->output('200', $insert);
            }
    }

    public function criarSaque(){
        
        $this->obterToken();

        $valor = $this->input->post('value');
        $tipo = $this->input->post('type');
        $key = $this->input->post('key');

        $this->db->where('id',0);	
        $ezzeData = $this->db->get('ezzebank')->result();


        $url = $ezzeData[0]->url.'/pix/payment';

        $data = array(
            'amount' => $valor,
            'description' => 'Saque de saldo da plataforma de jogos',
            'creditParty' => array(
                'name' => $this->session->nome,
                'keyType' =>  $tipo,
                'key' => $key,
                'taxId' =>  $this->engine->cpf($this->session->cpf)
            )
        );

        $header = array(
            'Authorization: Bearer ' . $this->session->access_token
        );

        $response = $this->enviarRequest($url, $header, $data);

        
        $dados = json_decode($response, true);

        if($dados['transactionId']){

            $insert = array(
                'transacao_id' => $dados['transactionId'],
                'usuario' => $this->session->id,
                'valor' => $valor,
                'tipo' => 'saque',
                'data_hora' => date('Y-m-d H:i:s'),
                'status' => 'processamento'
            );

            $this->db->insert('transacoes', $insert);

            $this->session->set_userdata('transacao_id', $dados['transactionId']);

            $msg = "Saque solicitado com sucesso!";
            $this->session->set_flashdata('msg', $msg);
            $this->session->set_flashdata('tipo', "success");
            
            redirect('');

        }else{
            $msg = "Erro ao solicitar saque, tente novamente mais tarde ou entre em contato com o suporte!";
            $this->session->set_flashdata('msg', $msg);
            $this->session->set_flashdata('tipo', "danger");
            
            redirect('');
        }
    }
    public function test(){
        echo $this->engine->cpf($this->session->cpf);
    }

}
