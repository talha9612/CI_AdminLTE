<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    public $Student_model;
    public $input;

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
        
    }

    public function index() {
        $data['students'] = $this->Student_model->get_all();
        $data['page'] = 'student/index';
        $this->load->view('index', $data);
    }

    public function create() {
        $data['page'] = 'student/create';
        $this->load->view('index', $data);
    }

    public function store() {
        $this->Student_model->insert([
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
        ]);
        redirect('student');
    }

    public function edit($id) {
        $data['student'] = $this->Student_model->get($id);
        $data['page'] = 'student/edit';
        $this->load->view('index', $data);
    }

    public function update($id) {
        $this->Student_model->update($id, [
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
        ]);
        redirect('student');
    }

    public function delete($id) {
        $this->Student_model->delete($id);
        redirect('student');
    }
}
