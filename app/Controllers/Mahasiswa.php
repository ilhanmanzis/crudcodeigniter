<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mahasiswa_model;

class Mahasiswa extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Mahasiswa_model();
        helper(['form']);
    }

    public function index()
    {
        $data['title'] = "Lihat Data Mahasiswa";
        $data['custom'] = "ilhan manzis";
        $data['data_mahasiswa'] = $this->db->getAll();
        echo view('templates/header', $data);
        echo view('templates/menu');
        echo view('mahasiswa/index', $data);
        echo view('templates/footer');
    }

    public function add()
    {

        session();

        $data = [
            "title" => "Tambah Data Mahasiswa",
        ];

        echo view('templates/header', $data);
        echo view('templates/menu');
        echo view('mahasiswa/add', $data);
        echo view('templates/footer');
    }

    public function save()
    {

        if (!$this->validate([
            'Nama' => 'required',
            'JenisKelamin' => 'required',
            'Alamat' => 'required',
            'Agama' => 'required',
            'NoHp' => 'required|integer',
            'Email' => 'required|valid_email'
        ])) {
            return redirect()->to(base_url('/mahasiswa/add'))->withInput();
        }
        $this->db->save([
            "Nama" => $this->request->getVar('Nama'),
            "JenisKelamin" => $this->request->getVar('JenisKelamin'),
            "Alamat" => $this->request->getVar('Alamat'),
            "Agama" => $this->request->getVar('Agama'),
            "NoHp" => $this->request->getVar('NoHp'),
            "Email" => $this->request->getVar('Email')
        ]);

        session()->setFlashdata('message', 'Data Berhasil ditambahkan.');
        return redirect()->to(base_url('/mahasiswa'));
    }

    public function delete($id)
    {
        $this->db->delete($id);
        session()->setFlashdata('message', 'Data Berhasil dihapus.');
        dd(session());
        return redirect()->to(base_url('/mahasiswa'));
    }

    public function edit($id)
    {
        session();

        $data = [
            "title" => "Tambah Edit Mahasiswa",
            "data_mahasiswa" => $this->db->getById($id)
        ];

        echo view('templates/header', $data);
        echo view('templates/menu');
        echo view('mahasiswa/edit', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        if (!$this->validate([
            'Nama' => 'required',
            'JenisKelamin' => 'required',
            'Alamat' => 'required',
            'Agama' => 'required',
            'NoHp' => 'required|integer',
            'Email' => 'required|valid_email'
        ])) {
            return redirect()->to(base_url('/mahasiswa/add'))->withInput();
        }
        $this->db->save([
            "IdMhsw" => $this->request->getVar('IdMhsw'),
            "Nama" => $this->request->getVar('Nama'),
            "JenisKelamin" => $this->request->getVar('JenisKelamin'),
            "Alamat" => $this->request->getVar('Alamat'),
            "Agama" => $this->request->getVar('Agama'),
            "NoHp" => $this->request->getVar('NoHp'),
            "Email" => $this->request->getVar('Email')
        ]);

        session()->setFlashdata('message', 'Data Berhasil diubah.');
        return redirect()->to(base_url('/mahasiswa'));
    }
}
