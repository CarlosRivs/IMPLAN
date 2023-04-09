<?php
namespace App\Models;
use CodeIgniter\Model;
class CategoriasModel extends Model {
    protected $table = 'tipos';
    protected $primaryKey = 'tip_ID';
    protected $alloweFields = [
        'tip_Nombre',
    ];

    public function obtenerCategorias()
    {
        return $this->findAll();
    }
}