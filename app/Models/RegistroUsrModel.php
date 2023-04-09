<?php
namespace App\Models;
use CodeIgniter\Model;
class RegistroUsrModel extends Model
{
    protected $table ='usuario';
    protected $primaryKey = 'usr_ID';
    protected $allowedFields = [
        'usr_Nombre',
        'usr_ApellidoPatr',
        'usr_ApellidoMatr',
        'usr_FechaNa',
        'usr_Email',
        'usr_Contraseña',
        'usr_priv_ID',
        'usr_CodigoVerifica',
        'usr_FechaRegistro',
    ];

    public function insertarUsuario($data)
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }

    //consultar todos los datos de los usuarios
    //se usa en las ESTADISTICAS
    public function consultarUsuarios()
    {
        return $this->select('usr_ID, usr_priv_ID, usr_FechaRegistro')->findAll();
    }

    // se usa para cuando el usuario desea que el codigo de verificacion se vuelva a enviar
	// primero se consulta el codigo en la BD y se envia de nuevo 
	///EN PROCESO
	public function consultarCodigo($emailUsr)
	{
		$db = db_connect();
		$builder = $db->table($this->table)->where('usr_Email',$emailUsr);
		$resultado = $builder->get();
		return $resultado->getResult() ? $resultado->getResult()[0] : false;
	}
}
