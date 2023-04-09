<?php
namespace App\Controllers;
use App\Models\Usr_LoginModel;

class login extends BaseController
{
    private $usuario;

    public function index(){

        return view('Sessions/V_login&register');
    }

    public function Inicio()
    {
        $emailUsuario = $this->request->getPost('emailUsuario');
        // Validamos que sea un Email o un nombre de usuario
        if(filter_var($emailUsuario, FILTER_VALIDATE_EMAIL))
        {
            //si es email, sanitizamos o limpiamos para evitar inyecciones SQL etc.
            $email = filter_var($emailUsuario, FILTER_VALIDATE_EMAIL);
            $this->usuario = new Usr_LoginModel();
            $resultadoUsuario = $this->usuario->buscarUsuarioPorEmail($email);

        }else{
            //si existen caracteres diferentes a los prestablceidos seran reemplazados
            $usuario = preg_replace("/[^a-zA-Z0-9.-]/", "", $emailUsuario);
            $this->usuario = new Usr_LoginModel();
            $resultadoUsuario = $this->usuario->buscarUsuarioPorUsuario($usuario);
        }

        //Validacion de SDT -> $resultadoUsuario
        //print_r ($resultadoUsuario);
        
        //Validacion de contraseña Usando el array $resutadoUsuario
       if($resultadoUsuario)
        {
            //Desencriptacion de contraseña, array $resultadoUsuario
            $encrypt =  \Config\Services::encrypter();
            $contraDB = $encrypt->decrypt(hex2bin($resultadoUsuario->usr_Contraseña));

            //Conversion de SDT $resultadoUsuario a un Array para extraer un solo valor.
            $array = json_decode(json_encode($resultadoUsuario), true);
            $type = $array['usr_priv_ID'];

            $pass = $this->request->getPost('contraseña');

            //comparacion de contraseña ingresada con la registrada
            if ($pass == $contraDB) {
                //Comparacion de valor extraido del arreglo en $array 
                //redireccion a administrador
                if ($type == 1) {
                    //($type);
                    // echo ' Usted es administrador';
                    //Creacion de session
                    $data = [
                        "ID_usr" => $resultadoUsuario->usr_ID,
                        "nombreUsuario" => $resultadoUsuario->usr_Nombre . ' ' . $resultadoUsuario->usr_ApellidoPatr,
                        "emailUsuario" => $resultadoUsuario->usr_Email,
                        "tipo" => $resultadoUsuario->usr_priv_ID,
                        "Verficado" => $resultadoUsuario->usr_CodigoVerifica
                    ];
                    // si el usuario no se ha verificado pasar a la vista verificacion.php si no entra al sistema
                    if ($resultadoUsuario->usr_CodigoVerifica > 0) {
                        session()->set($data);
                        return view('Sessions/V_CodigoVerifica');
                    } else {
                        session()->set($data);
                        return redirect()->to(base_url() . '/Admin');
                    }
                    
                }
                // redireccion a usuario comun
                else {
                    //print_r($type);
                    //echo ' Usted es usuario';

                    $data = [
                        "nombreUsuario" => $resultadoUsuario->usr_Nombre . ' ' . $resultadoUsuario->usr_ApellidoPatr,
                        "emailUsuario" => $resultadoUsuario->usr_Email,
                        "tipo" => $resultadoUsuario->usr_priv_ID,
                        "Verficado" => $resultadoUsuario->usr_CodigoVerifica

                    ];
                    if ($resultadoUsuario->usr_CodigoVerifica > 0) {
                        session()->set($data);
                        return view('Sessions/V_CodigoVerifica');
                    } else {
                        session()->set($data);
                        return redirect()->to(base_url() . '/');
                    }
                }
            } else {
                $data = [
                    'tipo' => 'danger', 'mensaje' => 'Su contraseña es incorrecta'
                ];
                return view('Sessions/V_login&register', $data);
            }
            
        }else{
            $data = [
                'tipo' => 'danger', 'mensaje' => 'Datos incorrectos'
            ];
            return view('Sessions/V_login&register', $data);
        }
 
    }
    

    public function cerrarSession()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }


    private $codigoBD;
    public function verificarcodigo()
    {
        
        // obtiene los valores de entrada por POST
        $emailUsr = $this->request->getPost('email');
        $N1 = $this->request->getPost('N1');
        $N2 = $this->request->getPost('N2');
        $N3 = $this->request->getPost('N3');
        $N4 = $this->request->getPost('N4');
        $N5 = $this->request->getPost('N5');

        // junta los valores en una cadena
        //$codigoUsr es el que ingresa el usaurio
        $codigoUsr = $N1.$N2.$N3.$N4.$N5;

        //Se manda a traer el modelo
        $this->codigoBD = new Usr_LoginModel();
        //se genera la consulta dando como resultado un SDT
        $result = $this->codigoBD->consultarCodigo($emailUsr);

        if ($codigoUsr == $result->usr_CodigoVerifica) {
            $code = 0;
            $response = $this->codigoBD->actualizarCodigo($emailUsr,$code);
            if ($response == TRUE) {
                $msg = [
                    'tipo' => 'success', 'mensaje' => 'Su correo se ha sido verificado correctamente',
                ];
                // Guardar mensaje en sesión
                session()->setFlashdata($msg);

                // Redireccionar a página principal
                return redirect()->to(base_url() . '/')->withCookies();

            }else{
                $msg = [
                    'tipo' => 'danger', 'mensaje' => 'Ocurrio un error con la verificación',
                ];
                return view('Sessions/V_CodigoVerifica', $msg);
            }
        }else{
            $msg = [
                'tipo' => 'danger', 'mensaje' => 'su numero de validacion no coincide, verifique su correo',
            ];
            return view('Sessions/V_CodigoVerifica', $msg);
        };

    }

    /// Recuperacion de contraseña EN PROCESO
    public function recuperacionCuenta()
    {
        return view('Sessions/V_Recuperacioncuenta');
    }

    public function recuperarCuenta()
    {
        $emailR = $this->request->getPost('emailUsuario');
    }
}