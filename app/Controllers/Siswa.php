<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelsiswa;

class Siswa extends Controller
{

    public function index()
	{
		return view('index');
	}
    public function about()
	{
		return view('about');
	}

    public function tampil()
    {
        $sw = new Modelsiswa();
        $data = [
            'tampildata' => $sw->tampildata()->getResult()
        ];
        echo View('viewtampilsiswa', $data);
    }

    public function tambah()
    {
        helper('form');
        echo View('viewtambahsiswa');
    }

    public function simpan(){
        $data = [
            'nis' => $this->request->getpost('nis'),
            'nama' => $this->request->getpost('nama'),
            'kelas' => $this->request->getpost('kelas'),
            'alamat' => $this->request->getpost('alamat'),
            'tmplahir' => $this->request->getpost('tmplahir'),
            'tgllahir' => $this->request->getpost('tgllahir')
        ];
        $sw = new Modelsiswa();
        $simpan = $sw->simpan($data);
        if($simpan){
            return redirect()->to('/siswa/tampil');
        }
    }

    public function hapus(){
        $uri = service('uri');
        $nis = $uri->getSegment('3');
        $sw = new Modelsiswa();
        $sw->hapusdata($nis);
        return redirect()->to('/siswa/tampil');
    }

    public function edit(){
        helper('form');
        $uri = service('uri');
        $nis = $uri->getSegment('3');
        $sw = new Modelsiswa();
        $ambildata = $sw->ambildata($nis);
        if(count($ambildata->getResult()) > 0){
            $row = $ambildata->getRow();
            $data = [
                'nis' => $nis,
                'nama' => $row -> nama,
                'kelas' => $row -> kelas,
                'alamat' => $row -> alamat,
                'tmplahir' => $row -> tmplahir,
                'tgllahir' => $row -> tgllahir,
            ];
            echo View('vieweditsiswa',$data);
        }
    }

    public function update(){
        $nis = $this->request->getpost('nis');
        $data = [
            'nama' => $this->request->getpost('nama'),
            'kelas' => $this->request->getpost('kelas'),
            'alamat' => $this->request->getpost('alamat'),
            'tmplahir' => $this->request->getpost('tmplahir'),
            'tgllahir' => $this->request->getpost('tgllahir')
        ];
        $sw = new Modelsiswa();
        $update = $sw->editdata($data, $nis);
        if($update){
            return redirect()->to('/siswa/tampil');
        }
    }
}
