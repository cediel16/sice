<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Usuarios_model');
        $this->data['script'].= script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/usuarios.js"));
    }

    public function index() {

        if (!$this->auth->is_logged_in()) {
            redirect('main/login');
        } elseif (!$this->auth->is_access_permission('usuarios:lista de usuarios')) {
            $this->data['content'] = $this->load->view('tpl/permission', '', TRUE);
            $this->load->view('tpl/main', $this->data);
        } else {
            $data['rows_alumnos'] = $this->Usuarios_model->list_rows_alumnos();
            $data['rows_representantes'] = $this->Usuarios_model->list_rows_representantes();
            $data['rows_docentes'] = $this->Usuarios_model->list_rows_docentes();
            $data['rows_administrativos'] = $this->Usuarios_model->list_rows_administrativos();
            $data['message']='';
            $data['title'] = anchor('usuarios', 'Usuarios');
            $this->data['content'] = $this->load->view('usuarios/index', $data, TRUE);
            $this->load->view('tpl/main', $this->data);
        }
    }

    public function add() {
        if (!$this->auth->is_logged_in()) {
            redirect('main/login');
        } elseif (!$this->auth->is_access_permission('representantes:registrar representante')) {
            $this->data['content'] = $this->load->view('tpl/permission', '', TRUE);
            $this->load->view('tpl/main', $this->data);
        } else {
            $this->form_validation->set_rules('cedula', 'Cédula', 'required');
            $this->form_validation->set_rules('primer_nombre', 'Primer nombre', 'required');
            $this->form_validation->set_rules('primer_apellido', 'Primer apellido', 'required');
            $this->form_validation->set_rules('sexo', 'Sexo', 'required');
            if ($this->form_validation->run()) {
                if ($this->Representantes_model->add($this->input->post())) {
                    $this->session->set_flashdata('message', info_msj('La información del representante se ha registrado con éxito.'));
                } else {
                    $this->session->set_flashdata('message', error_msj('Error al intentar registrar la información del representante.'));
                }
                redirect('representantes');
            }
            $data['title'] = 'Nuevo representante';
            $this->data['content'] = $this->load->view('representantes/add', $data, TRUE);
            $this->load->view('tpl/main', $this->data);
        }
    }
    
    public function view() {

        if (!$this->auth->is_logged_in()) {
            redirect('main/login');
        } elseif (!$this->auth->is_access_permission('representantes:ver representante')) {
            $this->data['content'] = $this->load->view('tpl/permission', '', TRUE);
            $this->load->view('tpl/main', $this->data);
        } else {
            $data['title'] = anchor('representantes/view', 'Datos del representante');
            $data['sub_menu']='';
            $data['sub_menu'] = array(
                anchor('representantes/edit/'.$this->uri->segment(3), 'Editar'),
                anchor('representantes/del/'.$this->uri->segment(3), 'Eliminar')
            );
            $this->data['content'] = $this->load->view('representantes/view', $data, TRUE);
            $this->load->view('tpl/main', $this->data);
        }
    }

    public function edit() {

        if (!$this->auth->is_logged_in()) {
            redirect('main/login');
        } elseif (!$this->auth->is_access_permission('representantes:editar representante')) {
            $this->data['content'] = $this->load->view('tpl/permission', '', TRUE);
            $this->load->view('tpl/main', $this->data);
        } else {
            $data['title'] = anchor('representantes/edit/'.$this->uri->segment(3), 'Editar representante');
            $data['sub_menu']='';
            $this->data['content'] = $this->load->view('representantes/edit', $data, TRUE);
            $this->load->view('tpl/main', $this->data);
        }
    }
    
    public function del() {

        if (!$this->auth->is_logged_in()) {
            redirect('main/login');
        } elseif (!$this->auth->is_access_permission('representantes:eliminar representante')) {
            $this->data['content'] = $this->load->view('tpl/permission', '', TRUE);
            $this->load->view('tpl/main', $this->data);
        } else {
            $data['title'] = anchor('representantes/del/'.$this->uri->segment(3), 'Eliminar representante');
            $data['sub_menu']='';
            $this->data['content'] = $this->load->view('representantes/del', $data, TRUE);
            $this->load->view('tpl/main', $this->data);
        }
    }

}

/* End of file representantes.php */
/* Location: ./application/controllers/representantes.php */