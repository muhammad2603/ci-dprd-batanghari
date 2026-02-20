<?php

namespace App\Models;

use CodeIgniter\Model;

class SambutanSekretaris extends Model
{
    // set table name
    protected $table = 'sambutan_sekretaris';

    // @methods
    // Fetching data
    public function getDatas(): array
    {
        // @return
        return $this->builder()
            ->select()
            ->get()
            ->getResultArray();
    }
}
