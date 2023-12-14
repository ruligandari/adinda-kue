<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getProduksi()
    {
        $builder = $this->db->table('produksi');
        $builder->select('produksi.*, produk.nama_produk');
        $builder->join('produk', 'produk.id = produksi.nama_produk');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getProduksiById($id)
    {
        $builder = $this->db->table('produksi');
        $builder->select('produksi.*, produk.nama_produk');
        $builder->join('produk', 'produk.id = produksi.nama_produk');
        $builder->where('produksi.nomor_produksi', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }
}
