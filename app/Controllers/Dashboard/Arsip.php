<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ArsipModel;

class Arsip extends BaseController
{

    protected $surat;

    public function __construct()
    {
        helper(['url', 'form']);
        $this->surat = new ArsipModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Arsip Surat',
            'surat' => $this->surat->getData(),
        ];

        return view('Dashboard', $data);
    }


    public function add()
    {
        $data = [
            'title' => 'Unggah Arsip',
            'validation' => $this->validation,
        ];

        return view('Upload', $data);
    }

    public function insertData()
    {
        $this->surat->tambahArsip();
        return redirect()->to(base_url());
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Arsip',
            'surat' => $this->surat->getData($id),
        ];

        return view('Edit', $data);
    }

    public function update()
    {
        $this->surat->editArsip();
        return redirect()->to(base_url());
    }

    public function unduh($id)
    {
        $surat = $this->surat->find($id);
        return $this->response->download('surat/' . $surat['file_surat'], null);
    }

    public function delete($id)
    {
        $surat = $this->surat->find($id);
        unlink('surat/' . $surat['file_surat']);

        $this->surat->delete($id);
        return redirect()->to(base_url());
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Lihat',
            'detail' => $this->surat->getData($id),
        ];

        return view('Detail', $data);
    }



    public function about()
    {
        $data['title'] = 'About Me';

        return view('About', $data);
    }
}
