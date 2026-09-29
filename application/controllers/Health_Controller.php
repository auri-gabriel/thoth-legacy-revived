<?php
defined('BASEPATH') or exit('No direct script access allowed');

/** Lightweight container/load-balancer health endpoint. */
class Health_Controller extends CI_Controller
{
    public function index()
    {
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode(array(
                'status' => 'ok',
                'service' => 'thoth',
            )));
    }
}
