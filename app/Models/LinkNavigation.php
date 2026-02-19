<?php
// Namespace Models
namespace App\Models;
// Use Model CI
use CodeIgniter\Model;
// @class
class LinkNavigation extends Model
{
    // Select table
    protected $table = 'navigasi_header';
    // Return type when fetch data
    protected $returnType = 'array';
    // Primary Key Field
    protected $primaryKey = 'id';
    // Allowed fields
    protected $allowedFields = ['nama', 'link', 'status_publish'];
    // @methods
    // Fetching datas
    public function getDatas(string $statusPublish = '1'): array
    {
        // Return results
        return $this->builder('navigasi_header parent_nav')
            ->select("parent_nav.nama AS parent_name,
                    parent_nav.slug AS parent_slug,
                    GROUP_CONCAT(child_nav.nama ORDER BY child_nav.idx ASC SEPARATOR ',') AS child_name,
                    GROUP_CONCAT(child_nav.slug ORDER BY child_nav.idx ASC SEPARATOR ',') AS child_slug")
            ->join('navigasi_dropdown child_nav', 'child_nav.nama_link_navigasi = parent_nav.id', 'LEFT')
            ->where('parent_nav.status_publish', $statusPublish)
            ->orderBy('parent_nav.id', 'ASC')
            ->groupBy('parent_nav.nama')
            ->get()
            ->getResultArray();
    }
}
