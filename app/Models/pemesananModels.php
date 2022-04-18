<?php

namespace App\Models;

use CodeIgniter\Model;

class pemesananModels extends Model
{
    protected $table      = 'pemesanan';
    protected $primaryKey = 'id_pemesan';

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['nama_pemesan', 'email', 'nama_tamu', 'jenis_kamar', 'noHP'];

    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_pemesan' => $id])->first();
    }
}
