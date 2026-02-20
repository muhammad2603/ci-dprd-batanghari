<?php

namespace App\Models;

use CodeIgniter\Model;

class Meta extends Model
{
    // set table name
    protected $table = 'meta';
    // set primary key
    protected $primaryKey = 'id';

    // @methods
    // Fetching data
    public function getDatas(string $identity = 'Beranda'): array
    {
        // @return
        return $this->builder()
            ->select('meta')
            ->where('identity', $identity)
            ->get()
            ->getResultArray();
    }
}
