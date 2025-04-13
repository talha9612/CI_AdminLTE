<?php
class DashboardController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        $this->load->view('template/header.php');
        $this->load->view('index.php');
        $this->load->view('template/footer.php');

    }
}
?>