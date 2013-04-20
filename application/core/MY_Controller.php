<?php

if (!defined('BASEPATH'))
    exit('No deseo permitir acceso directo a este script');

class MY_Controller extends CI_Controller {

    protected $data;

    function __construct() {
        parent::__construct();
        $this->load->config('common');
//        $this->auth->set_userdata();
        $this->data = array(
            'tpl_menu' => $this->load->view('menu', '', TRUE),
            'tpl_content' => '',
            'script' => '',
            'title' => '',
            'submenu' => Array(),
            'username' => $this->session->userdata("usuario")
        );
    }

}

// END MY_Controller class

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */

