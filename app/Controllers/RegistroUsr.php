<?php

namespace App\Controllers;
use App\Models\RegistroUsrModel;
///use App\Models\Usr_LoginModel;
class RegistroUsr extends BaseController
{
    //private $CodigoVerifica;
    public function new()
    {
        $validation = \Config\Services::validation();
        
        return view('Sessions/V_login&register',['validation'=> $validation]);
    }

    public function create()
    {   
        //variable para registrar fecha actual en BD
        $date=date("Y-m-d H:i:s");
        // se inicializa el modelo y se insertan los datos por metodo Post

        if ($this->validate('registroUsr')) {
            //encriptacion de contraseña con metodo BIN2HEX
            $encrypter =  \Config\Services::encrypter();
            $pass = $this->request->getPost('Password');
            $clave = bin2hex($encrypter->encrypt($pass));
            $correo = $this->request->getPost('Email');
            //Generar codigo de verificacion de 5 digitos  EN PROCESO
            
            $codigo = mt_rand(10000, 99999);

            $RegistroUsr = new RegistroUsrModel();

            $data = [
                'usr_Nombre'=>$this->request->getPost('nombre'),
                'usr_ApellidoPatr'=>$this->request->getPost('apellidoPatr'),
                'usr_ApellidoMatr'=>$this->request->getPost('apellidoMatr'),
                'usr_FechaNa'=>$this->request->getPost('DateN'),
                'usr_Email'=>$correo,
                'usr_Contraseña'=>$clave,
                'usr_priv_ID'=>2,
                'usr_CodigoVerifica'=>$codigo,
                'usr_FechaRegistro'=>$date,
            ];

            //ES INEFICIENTE QUE SE REGISTRE PRIMERO EL USUARIO Y LUEGO SE MANDE EL EMAIL
            //$this->CodigoVerifica = new RegistroUsrModel();
            //$resultadoCodigoVerifica = $this->CodigoVerifica->consultarCodigoVerifica($correo);


            //GENERA EMAIL
            $email = \config\Services::email();
            // configura los detalles del correo electrónico
            $email->setFrom('comdia.01@gmail.com', 'IMPLAN - Validacion de registro');
            $email->setTo($correo);
            $email->setSubject('Codigo de confirmación');

            $message = '<html><body>';
            $message .= '<h1>Codigo de confirmación</h1>';
            $message .= '<p>Su codigo de confirmación es: <strong>' . $codigo . '</strong></p>';
            $message .= '</body></html>';

            $email->setMessage($message);
            $email->setMailType('html'); // Set the email format to HTML
            // envía el correo electrónico y si se envia entonces el usurio se registra.
            if ($email->send()) {
                $msg = [
                    'tipo' => 'success', 'mensaje' => 'Registro exitoso'
                ];
                // Inserta los datos a la BD 
                $RegistroUsr->insertarUsuario($data);
                return view('Sessions/V_login&register', $msg);
            } else {
                $errors = $email->printDebugger(['headers']);
                echo $errors;
            }
        }else{
            $msg = [
                'tipo' => 'danger', 'mensaje' => 'Error al resgistrar su informacion, verifique sus datos',
            ];
            return view('Sessions/V_login&register', $msg);
        }
        // Error en el registro
        return redirect()->back()->withInput();
    }
    ///
    public function reenvioCodigo()
    {
        $RegistroUsr = new RegistroUsrModel();
        $emailUsr = session('emailUsuario');
        $RegistroUsr->consultarCodigo($emailUsr);
        $codigo = session('Verficado');
        //GENERA EMAIL
        $email = \config\Services::email();
        // configura los detalles del correo electrónico
        $email->setFrom('comdia.01@gmail.com', 'IMPLAN - Validacion de registro');
        $email->setTo($emailUsr);
        $email->setSubject('Codigo de confirmación');

        $message = '<html><body>';
        $message .= '<h1>Codigo de confirmación</h1>';
        $message .= '<p>Su codigo de confirmación es: <strong>' . session('Verficado') . '</strong></p>';
        $message .= '</body></html>';

        $email->setMessage($message);
        $email->setMailType('html'); // Set the email format to HTML
        // envía el correo electrónico y si se envia entonces el usurio se registra.
        if ($email->send()) {
            $msg = [
                'tipo' => 'success', 'mensaje' => 'Codigo de verificacion reenviado'
            ];

            return view('Sessions/V_CodigoVerifica', $msg);
        } else {
            $errors = $email->printDebugger(['headers']);
            echo $errors;
        }
    }
}
