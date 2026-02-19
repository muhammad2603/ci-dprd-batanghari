<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananInformasi extends Model
{
    // Set table name
    protected $table = 'layanan_informasi';
    // Set primary key
    protected $primaryKey = 'id';

    // @methods
    public function getDatas(string $table_selected = '*'): array
    {
        return $this->builder()
            ->select($table_selected)
            ->get()
            ->getResultArray();
    }
}
