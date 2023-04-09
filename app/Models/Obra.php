<?php 
namespace App\Models;

use CodeIgniter\Model;

class Obra extends Model{
    protected $table      = 'obras';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'obr_ID';
    protected $allowedFields = ['obr_Nombre','obr_Fecha','obr_Foto'];

}