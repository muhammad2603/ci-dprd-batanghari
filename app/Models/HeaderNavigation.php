<?php
// Namespace Models
namespace App\Models;
// Use Model CI
use CodeIgniter\Model;
// @class
class HeaderNavigation extends Model
{
    // Select table
    protected $table = 'navigasi_header';
    // Return type when fetch data
    protected $returnType = 'array';
    // Primary Key Field
    protected $primaryKey = 'id';

    // @methods
    // Fetching datas
    public function getDatas(string $statusPublish = '1'): array
    {
        // @return
        return $this->builder('navigasi_header pn')
            ->select('pn.nama AS parent_nav, ml.slug')
            ->join('meta_links ml', 'ml.id = pn.meta_link_id', 'LEFT')
            ->get()
            ->getResultArray();
    }
}
