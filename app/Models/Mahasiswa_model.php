<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_model extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'IdMhsw';
    protected $allowedFields = ['Nama', 'Alamat', 'Telepon', 'JenisKelamin', 'Agama', 'NoHp', 'Email'];


    public function rules()
    {
        return [
            'Nama' => [
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            'JenisKelamin' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            'Alamat' => [
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
            'Agama' => [
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
            'NoHp' => [
                'label' => 'No Hp',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            'Email' => [
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
            ]
        ];
    }

    public function getAll()
    {
        return $this->orderBy('IdMhsw', 'ASC')->findAll();
    }

    public function getById($id)
    {
        return $this->where(['IdMhsw' => $id])->first();
    }
}
