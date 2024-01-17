<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manifest extends CI_Controller {

    public function generate_manifest_json() {

        $query['config'] = $this->db->get_where('config', array('id' => 0))->row();

        $manifest_data = array(
            'short_name' => $query['config']->nome,
            'name' => $query['config']->nome,
            'icons' => array(
                array(
                    'src' => $query['config']->favicon,
                    'sizes' => '192x192',
                    'type' => 'image/png'
                )
            ),
            'start_url' => '/',
            'display' => 'standalone',
            'theme_color' => '#000000',
            'background_color' => '#000000'
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($manifest_data));
    }
}
