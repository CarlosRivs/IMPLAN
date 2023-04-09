<?php 
namespace App\Models;

use CodeIgniter\Model;

class Sitio extends Model{
    protected $table      = 'sitios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'sit_ID';
    protected $allowedFields = ['sit_Nombre','sit_Foto','sit_Descripcion'];

}