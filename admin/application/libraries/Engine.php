<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Engine
{
    public function __construct()
    {
        $this->CI = &get_instance();
    }
    private function json_output($status_code, $arrayMessage)
    {
        $this->output->set_status_header($status_code);
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($arrayMessage, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }
    public function urlServer()
    {
        $url = getenv('APP_URL');
        return $url;
    }
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function output($status_code, $arrayMessage)
    {

        header('Access-Control-Allow-Origin: *');
        header("Content-type: application/json; charset=utf-8");

        $status = array(
            200 => '200 OK',
            201 => '201 CREATED',
            400 => '400 Bad Request',
            422 => 'Unprocessable Entity',
            500 => '500 Internal Server Error'
            );
        // ok, validation error, or failure
        header('Status: '.$status[$status_code]);
        
        echo json_encode($arrayMessage);

    }

    public function getMsg($token, $channelUsername)
    {
        $apiUrl = "https://api.telegram.org/bot{$token}/getUpdates?offset=-1&allowed_updates=[\"channel_post\"]&chat_id={$channelUsername}";
    
        $response = file_get_contents($apiUrl);
        if ($response !== false) {
            $responseData = json_decode($response, true);
    
            if ($responseData['ok']) {
                $messages = $responseData['result'];
    
                $latestMessage = end($messages);
                if (isset($latestMessage['channel_post']) && isset($latestMessage['channel_post']['text'])) {
                    $messageText = $latestMessage['channel_post']['text'];
    
                    return $messageText;
                }
            } else {
                echo 'Falha ao obter as mensagens do canal.';
            }
        } else {
            echo 'Falha ao conectar à API do Telegram.';
        }
    
        return null;
    }
    
    
    
    

    public function sendToGroup($token, $channelUsername, $texto){

        // Defina as informações necessárias
        $botToken = $token;
        $chatId =  $channelUsername;
        $message = $texto;
        

        // Construa a URL da API do Telegram
        $apiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

        // Crie os parâmetros da requisição POST
        $params = [
            'chat_id' => $chatId,
            'text' => $message,
            
        ];

        

        // Inicialize a requisição POST
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute a requisição
        $response = curl_exec($ch);

        // Feche a requisição
        curl_close($ch);

    }

    public function getMembers($token, $groupUsername){

            // Função para fazer a solicitação cURL
            function makeRequest($url, $data) {
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                $response = curl_exec($curl);
                curl_close($curl);
                return $response;
            }

            // Obter o número total de membros do grupo
            $url = "https://api.telegram.org/bot{$token}/getChatMembersCount";
            $data = "chat_id=@{$groupUsername}";
            $response = makeRequest($url, $data);
            $json = json_decode($response, true);

            if ($json['ok']) {
                $memberCount = $json['result'];
                echo "Total de membros: {$memberCount}" . PHP_EOL;
            } else {
                echo "Erro ao obter o número de membros do grupo." . PHP_EOL;
            }

            // Obter a lista de membros do grupo
            $url = "https://api.telegram.org/bot{$token}/getChatAdministrators";
            $data = "chat_id=@{$groupUsername}";
            $response = makeRequest($url, $data);
            $json = json_decode($response, true);

            if ($json['ok']) {
                $members = $json['result'];
                echo "Lista de membros:" . PHP_EOL;
                foreach ($members as $member) {
                    $username = $member['user']['username'];
                    $name = $member['user']['first_name'] . ' ' . $member['user']['last_name'];
                    echo "- Username: {$username}, Nome: {$name}" . PHP_EOL;
                }
            } else {
                echo "Erro ao obter a lista de membros do grupo." . PHP_EOL;
            }
    }
}


/* End of file Engine.php and path \application\libraries\Engine.php */
