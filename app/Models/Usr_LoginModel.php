<?php 
namespace App\Models;
use CodeIgniter\Model;

class Usr_LoginModel extends Model {
	protected $table = 'usuario';
	protected $primaryKey = 'usr_ID';

	public function buscarUsuarioPorEmail($email)
	{
		$db = db_connect();
		$builder = $db->table($this->table)->where('usr_Email',$email);
		$resultado = $builder->get();
		return $resultado->getResult() ? $resultado->getResult()[0] : false;
	}

	public function buscarUsuarioPorUsuario($usuario)
	{
		$db = db_connect();
		$builder = $db->table($this->table)->where('usr_UserName',$usuario);
		$resultado = $builder->get();
		return $resultado->getResult() ? $resultado->getResult()[0] : false;
	}
	
	public function consultarCodigo($emailUsr)
	{
		$db = db_connect();
		$builder = $db->table($this->table)->where('usr_Email',$emailUsr);
		$resultado = $builder->get();
		return $resultado->getResult() ? $resultado->getResult()[0] : false;
	}
	//Una vez verificado se actualiza en la BD el codigo a 0 lo cual indica que ya ha sido verificado
	public function actualizarCodigo($emailUsr, $code)
	{
		$db = db_connect();
		//localiza el usuario a actualizar 
		$builder = $db->table($this->table)->where('usr_Email',$emailUsr);
		//Actualiza el codigo a 0
		$builder->set('usr_CodigoVerifica', $code)->update();
		return true;
	}
}