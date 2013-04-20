<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imagesdb {

    function __construct($config = array()) {
        $this->CI = & get_instance();
        $this->CI->load->library('session');
        $this->CI->load->database();
    }

    function profile($table, $id) {
        $rst = $this->CI->db->get_where($table, array('id' => $id));
        if ($rst->num_rows() == 1 && !is_null($rst->row(0)->foto)) {
            $foto = pg_unescape_bytea($rst->row(0)->foto);
            header("Content-type: image/jpeg");
            echo $foto;
        }
    }

}

// END Imagesdb class

    /* End of file Imagesdb.php */
    /* Location: ./application/libraries/Imagesdb.php */

    