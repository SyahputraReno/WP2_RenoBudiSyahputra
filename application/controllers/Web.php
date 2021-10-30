<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a31abbbf437658c6366484e228803dbb584f22f1
>>>>>>> 782962b061496b7a43f2fb16ec6482b5caf8326d
<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Depan';
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
 }

}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<?php 
defined('BASEPATH') or exit ('no direct script access allowed');
class Web extends CI_Controller

    {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }
    
        public function index()
        {
            $data['judul'] = "Halaman Depan";
            $this->load->view('v_header',$data);
            $this->load->view('v_index',$data);
            $this->load->view('v_footer',$data);
        }
        public function about()
        {
            $data['judul'] = "Halaman About";
            $this->load->view('v_header', $data);
            $this->load->view('v_about', $data);
            $this->load->view('v_footer', $data);
        }
    }

?>
>>>>>>> e33d9147780c8c312a99eb4fbc913499708c431f
>>>>>>> a31abbbf437658c6366484e228803dbb584f22f1
>>>>>>> 782962b061496b7a43f2fb16ec6482b5caf8326d
