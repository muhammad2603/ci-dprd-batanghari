<?php

namespace App\Models;

use CodeIgniter\Model;

class DropdownNavigation extends Model
{
    // set table name
    protected $table = 'navigasi_dropdown';
    // set primary key
    protected $primaryKey = 'nama';

    // @methods
    // Fetching data
    public function getDatas(): array
    {
        // @return
        return $this->builder('navigasi_dropdown nd')
            ->select('nh.nama AS parent_nav, nd.nama AS child_nav, ml.slug')
            ->join('navigasi_header nh', 'nh.id = nd.nama_link_navigasi')
            ->join('meta_links ml', 'ml.id = nd.meta_link_id')
            ->orderBy('nd.idx', 'ASC')
            ->where('nh.status_publish', '1')
            ->get()
            ->getResultArray();
    }
}
