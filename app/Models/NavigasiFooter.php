<?php

namespace App\Models;

use CodeIgniter\Model;

class NavigasiFooter extends Model
{
    // set table name
    protected $table = 'navigasi_footer nf';
    // set primary key
    protected $primaryKey = 'id';

    // @methods
    // Fetching data
    public function getDatas(): array
    {
        // @return
        return $this->builder()
            ->select('nf.nama_kolom AS nama_kolom, ml.name AS navigasi, ml.slug')
            ->join('link_navigasi_footer lnf', 'lnf.nama_kolom_id = nf.id')
            ->join('meta_links ml', 'ml.id = lnf.meta_link_id')
            ->where('nf.status_publish', '1')
            ->orderBy('nf.id', 'ASC')
            ->orderBy('lnf.id', 'ASC')
            ->get()
            ->getResultArray();
    }
}
