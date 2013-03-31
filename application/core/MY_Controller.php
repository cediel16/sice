<?php if (!defined('BASEPATH')) exit('No deseo permitir acceso directo a este script');

class MY_Controller extends CI_Controller {

    protected $data;
    
    function __construct() {
        parent::__construct();
        $this->auth->set_userdata();
        $this->data=array(
            'script'=>'',
            'title'=>'title undefined',
            'content'=>'',
            'username'=>$this->session->userdata("usuario")
        );
    }

}

// END MY_Controller class

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */

