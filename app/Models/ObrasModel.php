<?php
namespace App\Models;
use CodeIgniter\Model;
class ObrasModel extends Model {
    protected $table = 'obras';
    protected $primaryKey = 'obr_ID';
    protected $alloweFields = [
        'obr_Nombre',
        'obr_Fecha',
        'obr_Foto',
        'obr_tipo_ID',
        'obr_pro_ID',
        'obr_map_ID'
    ];

    public function obtenerMapasObras() {
        $query = $this->db->query('
        SELECT mapa.*
        FROM mapa
        JOIN proyectos ON proyectos.pro_map_ID = mapa.map_ID
        JOIN obras ON obras.obr_pro_ID = proyectos.pro_ID
        ');
        $query2 = $this->db->table('mapa')
            ->join('obras', 'mapa.map_ID = obras.obr_map_ID')
            ->select('mapa.*')
            ->distinct()
            ->get()
            ->getResultArray();
        
        $consulta = $query->getResultArray();
        $mapas = array_merge($consulta, $query2);

        return $mapas;
    }
}