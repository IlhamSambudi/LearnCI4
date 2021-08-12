<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelsiswa extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata(){
        return $this->db->table('siswa')->get();
    }
    function simpan($data){
        return $this->db->table('siswa')->insert($data);
    }
    function hapusdata($nis){
        return $this->db->table('siswa')->delete(['nis' => $nis]);
    }
    function ambildata($nis){
        return $this->db->table('siswa')->getWhere(['nis' => $nis]);
    }
    function editdata($data, $nis){
        return $this->db->table('siswa')->update($data, ['nis'=> $nis]);
    }
}
