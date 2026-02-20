<?php

namespace App\Models;

use CodeIgniter\Model;

class MetaLinks extends Model
{
    // set table name
    protected $table = 'meta_links';
    // set primary key
    protected $primaryKey = 'id';

    // @methods
    // Fetching data
    public function getDatas(array|string $values): array
    {
        // @return
        return $this->builder()
            ->select('name, slug')
            ->whereIn('name', $values)
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
    }
}
