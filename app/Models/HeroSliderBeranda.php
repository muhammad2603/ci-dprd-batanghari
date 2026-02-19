<?php
// Namespace Models
namespace App\Models;
// Use Model from CodeIgniter
use CodeIgniter\Model;
// class HeroSliderBeranda
class HeroSliderBeranda extends Model
{
    // Set table name
    protected $table = 'hero_slider_beranda';
    // Set primary key
    protected $primaryKey = 'id';
    // Fetch data
    public function getDatas()
    {
        // @return
        return $this->builder()
            ->select('judul, deskripsi_singkat, img, badge, link')
            ->get()
            ->getResultArray();
    }
}
