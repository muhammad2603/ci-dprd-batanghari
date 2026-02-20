<?php

namespace App\Models;

use CodeIgniter\Model;

class MetaPages extends Model
{
    // set table name
    protected $table = 'meta_pages';
    // set primary key
    protected $primaryKey = 'id';

    // @methods
    // Fetching data
    public function getDatas(string $on_page = 'Beranda'): array
    {
        // @return
        return $this->builder()
            ->select('meta')
            ->where('page', $on_page)
            ->get()
            ->getResultArray();
    }
}
