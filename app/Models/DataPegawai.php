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
    /**
     * Mengambil data pegawai
     * 
     * @param array|null $field_selected: Pilih field yang ingin diambil didalam tabel.
     * 
     * @param array{
     *  pegawai?: list<'nama'|'nip'|'nipppk'>,
     *  jenis_kelamin?,
     *  asn?,
     *  pangkat_asn?,
     *  golongan_asn?,
     *  jabatan?
     * }|null $fields_selected
     * 
     * @return array
     */
    public function getDatas(array|null $fields_selected = null): array
    {
        // struktur field untuk membuat map [table => field|field_list]
        $fields_structures = [
            "pegawai" => [
                "nama" => "p.nama",
                "nip" => "p.nip",
                "nipppk" => "p.nipppk"
            ],
            "jenis_kelamin" => "jk.kelamin",
            "asn" => "asn.nama AS asn",
            "pangkat_asn" => "pa.nama AS pangkat",
            "golongan_asn" => "gol.nama AS golongan",
            "jabatan" => "jbt.nama AS jabatan"
        ];
        // variabel results untuk menghasilkan field yang dipilih
        $results = $fields_selected === null ? 'p.nama, p.nip, p.nipppk, jk.kelamin, asn.nama AS asn, pa.nama AS pangkat, gol.nama AS golongan, jbt.nama AS jabatan'
            : implode(', ', array_reduce( // reduce array_keys
                // array_keys mengembalikan ["pegawai", "jabatan"]
                array_keys($fields_selected),
                // callback
                function ($carry, $table) use ($fields_selected, $fields_structures) {
                    // ambil field dari $fields_selected (array) menggunakan array-key $table
                    $field = $fields_selected[$table];
                    // cek kembali apakah value field itu merupakan array, jika array:
                    if (is_array($field)) {
                        // mapping list-nya dan simpan item-nya ke $name
                        foreach ($field as $name) {
                            // ambil field column (SQL) yang telah dibuat divariabel $fields_structures (array assoc) berdasarkan key, dan simpan kedalam $carry (array)
                            $carry[] = $fields_structures[$table][$name];
                        }
                    } else { // jika value field bukan array:
                        // ambil field column (SQL) yang telah dibuat divariabel $fields_structures (array assoc) berdasarkan key, dan simpan kedalam $carry (array)
                        $carry[] = $fields_structures[$field];
                    }
                    // return carry yang telah diisi
                    return $carry;
                },
                // inisialisasi nilai awal pada array_reduce
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
