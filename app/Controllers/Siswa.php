<?php

namespace App\Controllers;

class Siswa extends BaseController
{
	public function index()
	{
		 return view('siswa/index');
	}
    public function dataSiswa()
    {
        return view('siswa/datasiswa');
    }
    public function about()
    {
        return view('siswa/about');
    }
}
