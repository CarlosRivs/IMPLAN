<?php
namespace App\Models;
use CodeIgniter\Model;
class MapaRegistroModel extends Model
{
    protected $table = 'mapa';
    protected $primaryKey = 'map_ID';
    protected $alloweFields = [
        'map_Nombre',
        'map_Archivo'
    ];
    
    public function guardarLayer($data)
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }
}