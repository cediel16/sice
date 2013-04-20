<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Representantes_model');
        $this->data['script'].= script_tag(array("type" => "text/javascript", "languaje" => "javascript", "src" => "js/representantes.js"));
    }

    public function index() {

        if (!$this->auth->is_logged_in()) {
            redirect('main/login');
        }
        
        $this->load->view('admin/index', $this->data);
    }

    public function add() {
        if (!$this->auth->is_logged_in()) {
            redirect('main/login');
        } elseif (!$this->auth->is_access_permission('representantes:registrar representante')) {
            $this->data['content'] = $this->load->view('tpl/permission', '', TRUE);
            $this->load->view('tpl/main', $this->data);
        } else {
            $this->form_validation->set_message('required', 'Este campo es obligatorio.');
            $this->form_validation->set_message('_is_cedula', 'Cédula es inválida.');
            $this->form_validation->set_message('_valid_cedula', 'Ésta cédula ya esta registrada.');
            $this->form_validation->set_message('_is_email', 'Correo electrónico inválido.');
            $this->form_validation->set_message('_valid_email', 'Éste correo electrónico ya está registrado.');
            $this->form_validation->set_rules('cedula', 'Cédula', 'required|callback__is_cedula|callback__valid_cedula');
            $this->form_validation->set_rules('primer_nombre', 'Primer nombre', 'required');
            $this->form_validation->set_rules('primer_apellido', 'Primer apellido', 'required');
            $this->form_validation->set_rules('fecha_nacimiento', 'Fecha de nacimiento', 'required');
            $this->form_validation->set_rules('sexo', 'Sexo', 'required');
            $this->form_validation->set_rules('email', 'Correo electrónico', 'required|callback__is_email|callback__valid_email');
            $this->form_validation->set_error_delimiters('<span class="form-msj-error">', '</span>');
            if ($this->form_validation->run()) {
                $post = $this->input->post();
                $post['codigo_activacion'] = md5(time());
                if ($this->Representantes_model->add($post)) {
                    /*
                      $this->email->from('servicio@sice.com', 'Sice');
                      $this->email->to($this->input->post('email'));
                      $this->email->subject('Registro de representante en [sitio web]');
                      $this->email->message('Saludos ' . $this->input->post('primer_nombre') . ' ' . $this->input->post('segundo_nombre') . ', te haz registrado como representante en nuestra plataforma.... ' . anchor('main/confirm/' . $post['codigo_activacion']), 'Activa tu cuenta');
                      if (!$this->email->send()) {
                      log_message($this->email->print_debugger());
                      }
                     */
                    $this->session->set_flashdata('message', info_msj('La información del representante se ha registrado con éxito.'));
                } else {
                    $this->session->set_flashdata('message', error_msj('Error al intentar registrar la información del representante.'));
                }

                redirect('representantes');
            }
            $data['title'] = anchor('representantes/add', 'Nuevo representante');
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
            $data['sub_menu'] = array(
                anchor('representantes/edit/' . $this->uri->segment(3), 'Editar'),
                anchor('representantes/del/' . $this->uri->segment(3), 'Eliminar')
            );

            $data['message'] = ($this->session->flashdata('message') == '') ? '' : $this->session->flashdata('message');

            $data['representante'] = $this->Representantes_model->get_representante_by_id($this->uri->segment(3));
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
            $this->form_validation->set_message('required', 'Este campo es obligatorio.');
            $this->form_validation->set_message('_is_cedula', 'Cédula es inválida.');
            $this->form_validation->set_message('_valid_cedula', 'Ésta cédula ya esta registrada.');
            $this->form_validation->set_message('_is_email', 'Correo electrónico inválido.');
            $this->form_validation->set_message('_valid_email', 'Éste correo electrónico ya está registrado.');
            $this->form_validation->set_rules('cedula', 'Cédula', 'required|callback__is_cedula|callback__valid_cedula_to_edit[' . $this->input->post('id') . ']');
            $this->form_validation->set_rules('primer_nombre', 'Primer nombre', 'required');
            $this->form_validation->set_rules('primer_apellido', 'Primer apellido', 'required');
            $this->form_validation->set_rules('fecha_nacimiento', 'Fecha de nacimiento', 'required');
            $this->form_validation->set_rules('sexo', 'Sexo', 'required');
            $this->form_validation->set_rules('email', 'Correo electrónico', 'required|callback__is_email|callback__valid_email');
            $this->form_validation->set_error_delimiters('<span class="form-msj-error">', '</span>');
            if ($this->form_validation->run()) {
                $post = $this->input->post();
                if ($this->Representantes_model->edit($post)) {
                    /*
                      $this->email->from('servicio@sice.com', 'Sice');
                      $this->email->to($this->input->post('email'));
                      $this->email->subject('Registro de representante en [sitio web]');
                      $this->email->message('Saludos ' . $this->input->post('primer_nombre') . ' ' . $this->input->post('segundo_nombre') . ', te haz registrado como representante en nuestra plataforma.... ' . anchor('main/confirm/' . $post['codigo_activacion']), 'Activa tu cuenta');
                      if (!$this->email->send()) {
                      log_message($this->email->print_debugger());
                      }
                     */
                    $this->session->set_flashdata('message', info_msj('La información del representante se ha editado con éxito.'));
                } else {
                    $this->session->set_flashdata('message', error_msj('Error al intentar registrar la información del representante.'));
                }
                redirect('representantes/view/' . $this->uri->segment(3));
            }
            $data['title'] = anchor('representantes/edit/' . $this->uri->segment(3), 'Editar representante');
            $data['sub_menu'] = '';
            $data['representante'] = $this->Representantes_model->get_representante_by_id($this->uri->segment(3));
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
            if ($this->input->post('del') == 'true') {
                if ($this->Representantes_model->del($this->uri->segment(3))) {
                    $this->session->set_flashdata('message', info_msj('El representante se ha eliminado con éxito.'));
                } else {
                    $this->session->set_flashdata('message', error_msj('Error al intentar eliminar el representante.'));
                }
                redirect('representantes');
            }
            $data['title'] = 'Eliminar representante';
            $data['sub_menu'] = '';
            $data['atras'] = (strstr(@$_SERVER['HTTP_REFERER'], site_url() . '/representantes/view/' . $this->uri->segment(3)) == TRUE) ? 'representantes/view/' . $this->uri->segment(3) : 'representantes';
            $data['representante'] = $this->Representantes_model->get_representante_by_id($this->uri->segment(3));
            $this->data['content'] = $this->load->view('representantes/del', $data, TRUE);
            $this->load->view('tpl/main', $this->data);
        }
    }

    function _is_cedula($arg) {
        return is_cedula($arg);
    }

    function _valid_cedula($arg) {
        $this->db->from('representantes');
        $this->db->where('status', 'activo');
        $this->db->where('cedula', $arg);
        return $this->db->count_all_results() == 0;
    }

    /*
      function _valid_cedula_to_edit($arg, $id) {
      $this->db->from('representantes');
      $this->db->where('status', 'activo');
      $this->db->where('cedula', $arg);
      $this->db->where('id !=', $id);
      return $this->db->count_all_results() == 0;
      }
     */

    function _is_email($arg) {
        return is_email($arg);
    }

    function _valid_email($arg) {
        $this->db->from('representantes');
        $this->db->where('status', 'activo');
        $this->db->where('email', $arg);
        return $this->db->count_all_results() == 0;
    }

}

/* End of file representantes.php */
/* Location: ./application/controllers/representantes.php */