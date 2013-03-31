<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth {

    function __construct($config = array()) {
        $this->CI = & get_instance();
        $this->CI->load->config('auth');
        $this->CI->load->library('session');
        $this->CI->load->database();
    }

    function login($usr, $clv,$grp) {
        $this->CI->db->select('id,usuario,status,acceso,grupo,grupo_fkey');
        $this->CI->db->from('usuarios');
        $this->CI->db->where('usuario', $usr);
        $this->CI->db->where('clave', md5($clv));
        $rst = $this->CI->db->get();
        if ($rst->num_rows == 1) {
            $usr = $rst->row_array();
            $this->CI->db->select("
                    cedula,
                    primer_nombre || ' ' || primer_apellido as nombre,
                    status as status_grupo
            ");
            $this->CI->db->from($usr['grupo']);
            $this->CI->db->where('id', $usr['grupo_fkey']);
            $rst = $this->CI->db->get();
            //$this->CI->session->set_userdata($rst->row_array());
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function is_logged_in($status = 'activo') {
        return $this->CI->session->userdata('status') === ($status ? $this->CI->config->item('status_active') : $this->CI->config->item('status_inactive'));
    }

    function is_access_module($module = '') {
        $a = json_decode($this->CI->session->userdata('acceso'), 1);
        if (!is_array($a))
            return false;
        foreach ($a as $v) {
            if (array_key_exists($module, $v))
                return true;
        }
        return false;
    }

    function is_access_permission($permission = '') {
        $p = explode(':', $permission);
        $a = json_decode($this->CI->session->userdata('acceso'), 1);
        if (!is_array($a))
            return false;
        foreach ($a as $v) {
            if (array_key_exists($p[0], $v)) {
                $aux = explode(',', $v[$p[0]]);
                if (in_array($p[1], $aux) == true) {
                    return true;
                }
            }
        }
        return false;
    }

    function set_userdata() {
        $this->CI->db->select('id,usuario,status,acceso');
        $this->CI->db->from('usuarios');
        $this->CI->db->where('id', $this->CI->session->userdata('id'));
        $rst = $this->CI->db->get();
        if ($rst->num_rows == 1) {
            $this->CI->session->set_userdata($rst->row_array());
        }
    }

    function get_random_pass() {
        return '123456';
    }

    function logout() {
        //$this->delete_autologin();
        // See http://codeigniter.com/forums/viewreply/662369/ as the reason for the next line
        $this->CI->session->set_userdata(array('id' => '', 'usuario' => '', 'status' => ''));
        $this->CI->session->sess_destroy();
        redirect('.');
    }

}

// END Auth class

/* End of file Auth.php */
/* Location: ./application/libraries/Auth.php */