<?php 

class App_extends extends CI_Model {

    public function test()
	{
		$query['sysname'] =  $this->sysname();
		$this->load->view('/pages/privacidade', $query);
	}

	public function goPag($param)
	{
		require_once APPPATH .'third_party/MercadoPago/autoload.php';

		MercadoPago\SDK::setAccessToken('TEST-2870470147726877-060721-3dad1d12080ccf48019d355b7466e57c__LA_LC__-2351913');
		
		$payment = new MercadoPago\Payment();
		$payment->transaction_amount = 100;
		$payment->token = $param['token'];
		$payment->description = "Blue shirt";
		$payment->installments = $param['installments'];
		$payment->payment_method_id = $param['payment_method_id'];
		$payment->issuer_id = $param['issuer_id'];
		$payment->payer = array(
		"email" => "john@yourdomain.com"
		);
		// Armazena e envia o pagamento
		$payment->save();

		// Imprime o status do pagamento

		$pays = array('id' => $payment->id,
		'status' => $payment->status,
		'date_approved' => $payment->date_approved);
		
		return json_encode($pays);
	}
}