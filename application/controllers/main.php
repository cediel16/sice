<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function makeimage() {
        $config['library'] = 'GD';
        $config['source_image'] = 'img/profile/default.jpg';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 75;
        $config['height'] = 50;
        $this->load->library('image_lib', $config);
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }
    }

    public function index() {
        if (!$this->auth->is_logged_in()) {
            redirect('main/login');
        } else {
            $this->data['title'] = 'Inicio';
            $this->data['content'] = $this->load->view('tpl/inicio', '', TRUE);
            $this->load->view('tpl/main', $this->data);
        }
    }

    public function login() {
        if ($this->auth->is_logged_in()) {
            redirect('.');
        } else {
            $this->form_validation->set_rules('usr', 'Usuario', 'required|callback__check_login');
            $this->form_validation->set_rules('clv', 'Contraseña', 'required');
            $this->form_validation->set_rules('grp', 'Grupo', 'required');
            $data['msj_login'] = '';
            if ($this->form_validation->run()) {
                if ($this->auth->login($this->input->post('usr'), $this->input->post('clv'), $this->input->post('grp'))) {
                    redirect('main');
                } else {
                    $data['msj_login'] = 'Correo electrónico y/o contraseña inválido';
                }
            }
            $data['script'] = '';
            $this->load->view('login', $data);
        }
    }
    
    public function adminlogin() {
        if ($this->auth->is_logged_in()) {
            redirect('.');
        } else {
            $this->form_validation->set_rules('usr', 'Usuario', 'required|callback__check_login');
            $this->form_validation->set_rules('clv', 'Contraseña', 'required');
            $data['msj_login'] = '';
            if ($this->form_validation->run()) {
                if ($this->auth->adminlogin($this->input->post('usr'), $this->input->post('clv'))) {
                    redirect('admin');
                } else {
                    $data['msj_login'] = 'Correo electrónico y/o contraseña inválido';
                }
            }
            $data['script'] = '';
            $this->load->view('admin/login', $data);
        }
    }

    public function logout() {
        $this->auth->logout();
    }

    public function confirm() {
        $this->db->update('usuarios', array('status' => 'activo'));
        $this->db->where('codigo_activacion', $this->uri->segment(3));
        if ($this->db->affected_rows() == 1) {
            echo 'Ok';
        } else {
            echo 'No...';
        }
    }

    function img() {
        $d = explode(':', base64_decode($this->uri->segment(3)));
        if (count($d) == 3) {
            if (
                    preg_match('/^[a-z]+$/', $d[0]) &&
                    preg_match('/^[a-z]+$/', $d[1]) &&
                    preg_match('/^[[:digit:]]+$/', $d[2])
            ) {
                switch ($d[0]) {
                    case 'profile': {
                            $this->imagesdb->profile($d[1], $d[2]);
                            break;
                        }
                }
            }
        }
    }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */