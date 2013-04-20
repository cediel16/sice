<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function img() {
        $config['upload_path'] = 'img/tmp/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '2048';
        $config['max_height'] = '2048';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            echo $this->upload->display_errors();
            //$error = array('error' => $this->upload->display_errors());
//            $this->load->view('upload_form', $error);
        } else {
            echo '<pre>';
            print_r($img = $this->upload->data());
            echo '</pre>';

            $config['image_library'] = 'gd2';
            $config['source_image'] = $img['full_path'];
            $config['maintain_ratio'] = FALSE;
            $config['width'] = 150;
            $config['height'] = 200;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            //$data = array('upload_data' => $this->upload->data());
//            $this->load->view('upload_success', $data);
        }
    }

}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */