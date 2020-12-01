<?php
// nama class harus sama dengan nama file
class M_Mahasiswa extends CI_Model
{
    /* 
    * @description untuk mengambil data
    * @param id : id mahasiswa
    * @return {array} : data mahasiswa 
    */
    public function getData($id = null)
    {
        // jika tidak ada id 
        if ($id === null) {
            // maka ambil semua
            return $this->db->get('mahasiswa')->result();
        } else {
            // maka ambil berdasarkan id
            return $this->db->get_where('mahasiswa', ['id' => $id])->row();
        }
    }

    /* 
    * @description untuk delete data
    * @param id {String} : id mahasiswa
    * @return {boolean}
    */
    public function delete($id = null)
    {
        // perintah delete 
        $this->db->delete('mahasiswa', ['id' => $id]);
        return $this->db->affected_rows();
    }

    /* 
    * @description untuk menambah data
    * @param data {Array} : data mahasiswa yang dikirim dari controller mahasiswa
    * @return {boolean}
    */
    public function addData($data)
    {
        // insert ke table mahasiswa
        $this->db->insert('mahasiswa', $data);
        return $this->db->affected_rows();
    }

    /* 
    * @description untuk update data
    * @param id {String} : id mahasiswa
    * @param data {Array} : data mahasiswa yang dikirim dari controller mahasiswa
    * @return {boolean}
    */
    public function updateData($id, $data)
    {
        $this->db->update('mahasiswa', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
