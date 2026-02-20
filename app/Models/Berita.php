<?php
// Namespace
namespace App\Models;
// Use Models from CI
use CodeIgniter\Model;

// Class Berita
class Berita extends Model
{
    // Set table name
    protected $table = 'berita';
    // Set primary key
    protected $primaryKey = 'id';

    // @methods
    // Fetch data berita
    public function getDatas(): array
    {
        // @return
        return $this->builder('berita b')
            ->select('b.thumbnail, b.judul, b.deskripsi_singkat, b.slug, b.tanggal_publish, kb.nama AS kategori')
            ->join('metadata_berita mb', 'mb.berita_id = b.id')
            ->join('kategori_berita kb', 'kb.id = mb.kategori_id')
            ->where('status_publish', '1')
            ->orderBy('b.tanggal_publish', 'DESC')
            ->limit(6, 0)
            ->get()
            ->getResultArray();
    }
}
