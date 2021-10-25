<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipModel extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nomor', 'kategori', 'judul', 'file_surat', 'waktu'
    ];

    protected $request;

    public function getData($id = false)
    {
        // $query = $this->db->get('surat');
        // return $query->result_array();
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }


    public function tambahArsip()
    {
        $this->request = service("request");
        $fileSurat = $this->request->getFile('file_surat');
        $fileSurat->move('surat/');
        $fileName = $fileSurat->getName();

        $data = [
            'nomor' => $this->request->getVar('nomor'),
            'kategori' => $this->request->getVar('kategori'),
            'judul' => $this->request->getVar('judul'),
            'file_surat' => $fileName,
        ];

        $this->insert($data);
    }

    public function editArsip()
    {
        // code...
        $this->request = service("request");

        $fileSurat = $this->request->getFile('file_surat');

        if ($fileSurat->getError() == 4) {
            $fileName = $this->request->getVar('before');
        } else {
            $fileName = $fileSurat->getName();
            $fileSurat->move('surat/');
            unlink('surat/' . $this->request->getVar('before'));
        }

        $data = [
            'id' => $this->request->getVar('id'),
            'nomor' => $this->request->getVar('nomor'),
            'kategori' => $this->request->getVar('kategori'),
            'judul' => $this->request->getVar('judul'),
            'file_surat' => $fileName,
        ];

        $this->save($data);
    }
}
