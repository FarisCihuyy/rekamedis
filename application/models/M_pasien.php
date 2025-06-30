<?php
class M_pasien extends CI_Model
{
    public function get_all()
    {
        $sql = "SELECT pasien.nama AS 'Nama', pasien.no_room AS 'Ruangan', pasien.no_telp AS 'HP', pasien.alamat AS 'Alamat', rm.tanggal AS 'Tanggal', rm.visum AS 'Visum', tindakan.nama AS 'Tindakan', dokter.nama AS 'Dokter' FROM reka_medik AS rm INNER JOIN pasien ON pasien.no_room = rm.no_room INNER JOIN tindakan ON tindakan.id = rm.id_tindakan INNER JOIN dokter ON dokter.id = rm.id_dokter";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function delete($ruangan)
    {
        $this->db->where('no_room', $ruangan); // sesuaikan 'id' dengan nama kolom primary key-mu
        $this->db->delete('reka_medik'); // sesuaikan nama tabel
    }

}
