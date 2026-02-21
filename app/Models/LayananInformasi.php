<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananInformasi extends Model
{
    // Set table name
    protected $table = 'layanan_informasi li';
    // Set primary key
    protected $primaryKey = 'id';

    // @methods
    // Fetch data layanan & informasi
    public function getDatas(): array
    {
        // @return
        return $this->builder()
            ->select('ml.name, li.deskripsi_singkat, ml.slug, li.icon, li.warna')
            ->join('meta_links ml', 'ml.id = li.meta_link_id')
            ->orderBy('li.id', 'ASC')
            ->get()
            ->getResultArray();
    }
}
