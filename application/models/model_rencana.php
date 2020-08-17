<?php 
class Model_Rencana extends CI_Model {
    public function insert_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function check_duplicate_data($data, $table) {
        $this->db->where($data);
        return $this->db->get($table);       
    }

    public function count_data() {
        return $this->db->get('tbl_verifikasi_perencanaan')->num_rows();
    }

    public function read_data($table) {
        return $this->db->get($table);
    }

    public function get_kode_kelas() {
        return $this->db->from('tbl_verifikasi_perencanaan')   ->join('tbl_kelas', 'tbl_kelas.id = tbl_verifikasi_perencanaan.kode_kelas')
                                                    ->join('tbl_matakuliah', 'tbl_matakuliah.kode_mk = tbl_kelas.kode_mk')
                                                    ->where('tbl_verifikasi_perencanaan.npm', $this->session->userdata('npm'))
                                                    ->get(); 
    } 

    public function delete_data($id, $table) {
        $this->db->where($id);
        $this->db->delete($table);
    }
}