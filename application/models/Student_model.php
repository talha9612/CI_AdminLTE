<?php
class Student_model extends CI_Model {

    public function get_all() {
        return $this->db->get('students')->result();
    }

    public function get($id) {
        return $this->db->get_where('students', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('students', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('students', $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete('students');
    }
}
