<?php 
namespace App\Models;

use CodeIgniter\Model;

class Proyectos extends Model{
    protected $table      = 'proyectos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'pro_ID';
    protected $allowedFields = ['pro_Nombre', 'pro_Descripcion','pro_ArchRender','pro_Fecha'
    ,'pro_Status', 'pro_usr_ID','pro_map_ID'];

}