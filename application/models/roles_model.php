<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of representantes_model
 *
 * @author johel
 */
class Roles_model extends CI_Model {

    function list_rows() {

        $sql = "
            SELECT * 
            FROM roles
        ";

        if ($this->db->query($sql)) {
            return $this->db->query($sql)->result();
        }
        return NULL;
    }

    function get_representante_by_id($id) {
        $rst = $this->db->get_where('representantes', array('id' => $id));
        if ($rst->num_rows() == 1) {
            return $rst->row();
        }
        return NULL;
    }

    function add($data) {
        $this->db->trans_start();
        $this->db->query("INSERT INTO representantes(
            cedula,
            primer_nombre,
            segundo_nombre,
            primer_apellido,
            segundo_apellido,
            sexo,
            email,
            fecha_nacimiento
        ) VALUES (
            '" . $data['cedula'] . "',
            '" . $data['primer_nombre'] . "',
            '" . $data['segundo_nombre'] . "',
            '" . $data['primer_apellido'] . "',
            '" . $data['segundo_apellido'] . "',
            '" . $data['sexo'] . "',
            '" . $data['email'] . "',
            '" . $data['fecha_nacimiento'] . "'
        )");
        $this->db->query("INSERT INTO usuarios(
            usuario,
            clave,
            grupo,
            grupo_fkey,
            status,
            codigo_activacion,
            acceso
        ) VALUES(
            '" . $data['email'] . "',
            md5('" . $this->auth->get_random_pass() . "'),
            'representantes',
            (select last_value from representantes_id_seq),
            'inactivo',
            '" . $data['codigo_activacion'] . "',
            '{\"representante\":{\"representantes\":\"lista de representantes,registrar representante,ver representante,editar representante,eliminar representante\"}}'
        )");
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            log_message('error', 'Usuario ' . $this->session->userdata('id') . ' --> Error al intentar registrar un nuevo representante.');
            return FALSE;
        }
        return TRUE;
    }

    function edit($data) {
        return TRUE;
        $this->db->trans_begin();
        $this->db->query("UPDATE representantes SET
            cedula='" . $data['cedula'] . "',
            primer_nombre='" . $data['primer_nombre'] . "',
            segundo_nombre'" . $data['segundo_nombre'] . "',
            primer_apellido='" . $data['primer_apellido'] . "',
            segundo_apellido='" . $data['segundo_apellido'] . "',
            sexo='" . $data['sexo'] . "',
            email='" . $data['sexo'] . "',
            fecha_nacimiento='" . $data['fecha_nacimiento'] . "'
            WHERE id=" . $data['id'] . "
        ");
        if ($this->db->affected_rows() != 1) {
            $this->db->trans_rollback();
            return FALSE;
        }

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            log_message('error', 'Usuario ' . $this->session->userdata('id') . ' --> Error al intentar editar representante.');
            $this->db->trans_rollback();
            return FALSE;
        }
        $this->db->trans_commit();
        return TRUE;
    }

    function del($id) {
        $this->db->trans_begin();
        $this->db->query("UPDATE representantes
            SET status='elminado'
            WHERE id=$id
        ");
        if ($this->db->affected_rows() != 1) {
            $this->db->trans_rollback();
            return FALSE;
        }

        $this->db->query("UPDATE usuarios
            SET status='elminado'
            WHERE grupo_fkey=$id
            AND grupo='representantes'
        ");
        if ($this->db->affected_rows() != 1) {
            $this->db->trans_rollback();
            return FALSE;
        }
        if ($this->db->trans_status() === FALSE) {
            log_message('error', 'Usuario ' . $this->session->userdata('id') . ' --> Error al intentar eliminar representante.');
            $this->db->trans_rollback();
            return FALSE;
        }
        $this->db->trans_commit();
        return TRUE;
    }

}

?>
