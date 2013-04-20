<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of representantes_model
 *
 * @author johel
 */
class Usuarios_model extends CI_Model {

    function add($data) {
        return $this->db->insert('representantes', $data);
    }

    function list_rows_alumnos() {
        $sql = "
            SELECT a.id
            FROM usuarios a
            INNER JOIN alumnos b ON b.id=a.grupo_fkey
        ";

        if ($this->db->query($sql)) {
            $d = $this->db->query($sql)->result();
            return $this->db->query($sql)->result();
        }
        return NULL;
    }

    function list_rows_representantes() {
        $sql = "
            SELECT a.id,
            a.usuario,
            a.status,
            a.acceso,
            b.primer_nombre,
            b.segundo_nombre,
            b.primer_apellido,
            b.segundo_apellido,
            b.cedula
            FROM usuarios a
            INNER JOIN representantes b ON b.id=a.grupo_fkey
        ";

        if ($this->db->query($sql)) {
            $d = $this->db->query($sql)->result();
            return $this->db->query($sql)->result();
        }
        return NULL;
    }

    function list_rows_docentes() {
        $sql = "
            SELECT a.id
            FROM usuarios a
            INNER JOIN docentes b ON b.id=a.grupo_fkey
        ";

        if ($this->db->query($sql)) {
            $d = $this->db->query($sql)->result();
            return $this->db->query($sql)->result();
        }
        return NULL;
    }

    function list_rows_administrativos() {
        $sql = "
            SELECT a.id,
            a.usuario,
            a.status,
            a.acceso,
            b.primer_nombre,
            b.segundo_nombre,
            b.primer_apellido,
            b.segundo_apellido,
            b.cedula
            FROM usuarios a
            INNER JOIN administrativos b ON b.id=a.grupo_fkey
        ";

        if ($this->db->query($sql)) {
            $d = $this->db->query($sql)->result();
            return $this->db->query($sql)->result();
        }
        return NULL;
    }

}

?>
