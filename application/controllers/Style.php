<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Style extends CI_Controller {

	public function generate_css()
	{
        header('Content-type: text/css');

        $this->db->where('id', 0);
        $cor =  $this->db->get('tema')->row()->cor_padrao;
        // Seu CSS dinâmico
        $css_content = "
        :root{
            --default:".$cor.";
            --black:#141417;
            --black-25:rgba(0,0,0,.25);
            --white-50:rgba(255,255,255,.3);
            --gray100:white;
            --yellow:".$cor.";
            --white-5:rgba(218,209,177,.05);
            --white-10:rgba(218,209,177,.1);
            --orange:".$cor.";
            --black-80:rgba(20,20,23,.9);
            --yellow10:rgba(227,45,71,.1);
            --slate-blue:rgba(227,45,71,.5);
            --white-2:rgba(218,209,177,.02);
            --black-50:rgba(0,0,0,.5);
            --green-yellow:#6cab36;
            --211b38:#1b1b1f;
            --yellow25:rgba(227,45,71,.25);
            --olive-drab:#3f7f41;
            --lime:rgba(227,45,71,.25)
        }";   

        // Carregue o conteúdo do arquivo CSS gerado
        echo $css_content;
	}
}
