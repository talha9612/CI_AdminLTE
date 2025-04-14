<?php
class DashboardController extends CI_Controller{
    public $Student_model;

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        parent::__construct();
        $this->load->model('Student_model');
        
    }
    public function index(){
        // $this->load->view('template/header');
        // $this->load->view('index.php');
        // $this->load->view('template/footer.php');
        // $data['students'] = $this->Student_model->get_all();
        // $data['page'] = 'student/index';
        $this->load->view('index');

    }
}
?>