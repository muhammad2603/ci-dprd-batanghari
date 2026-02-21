<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPegawai extends Model
{
    // set table name
    protected $table = 'data_pegawai dp';
    // set primary key
    protected $primaryKey = 'id';

    // @methods
    // Fetch data
    public function getDatas(array|null $fields_selected = null): array
    {
        $fields_structures = [
            "pegawai" => [
                "nama" => "p.nama",
                "nip" => "p.nip",
                "nipppk" => "p.nipppk",
            ],
            "jenis_kelamin" => "jk.kelamin",
            "asn" => "asn.nama AS asn",
            "pangkat_asn" => "pa.nama AS pangkat",
            "golongan_asn" => "gol.nama AS golongan",
            "jabatan" => "jbt.nama AS jabatan",
        ];

        $results = $fields_selected === null ? 'p.nama, p.nip, p.nipppk, jk.kelamin, asn.nama AS asn, pa.nama AS pangkat, gol.nama AS golongan, jbt.nama AS jabatan' : implode(', ', array_reduce(
            array_keys($fields_selected),
            function ($carry, $table) use ($fields_selected, $fields_structures) {

                $field = $fields_selected[$table];

                if (is_array($field)) {
                    foreach ($field as $name => $select) {
                        if ($select) $carry[] = $fields_structures[$table][$name];
                    }
                } else {
                    if ($field) $carry[] = $fields_structures[$table];
                }

                return $carry;
            },
            []
        ));

        // @return
        return $this->builder()
            ->select($results)
            ->join('pegawai p', 'p.id = dp.pgw_id')
            ->join('jenis_kelamin jk', 'jk.id = dp.jk_id')
            ->join('asn', 'asn.id = dp.asn_id')
            ->join('pangkat_asn pa', 'pa.id = dp.pangkat_id')
            ->join('golongan_asn gol', 'gol.id = dp.gol_id')
            ->join('jabatan jbt', 'jbt.id = dp.jbt_id')
            ->get()
            ->getResultArray();
    }
}
