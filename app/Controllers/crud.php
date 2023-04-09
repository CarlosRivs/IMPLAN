<?php namespace App\Controllers;

   use App\Models\CrudModel;

class crud extends BaseController
{
    public function index()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listarNombres();

        $mensaje = session('mensaje');

        $data =[
                "datos" => $datos,
                "mensaje" => $mensaje
        ];

        return view('listado', $data);
    }
    public function crear(){
        $archivo = $this->request->getFile('file');
        $nombreArchivo = $archivo->getRandomName();
        $archivo->move('resources/img', $nombreArchivo);

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha' => $this->request->getPost('fecha'),
            'file' => $nombreArchivo

  
        ];
        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos); 
        if($respuesta > 0) {
                return redirect()->to(base_url().'/')->with('mensaje','1');
            } else {
                return redirect()->to(base_url().'/')->with('mensaje','0');
        }
  
    }
    public function actualizar(){

        
    
        $Crud = new CrudModel();
        $id = $this->request->getPost('id');
        $datosAnteriores = $Crud->obtenerPorId($id); // Obtener los datos actuales de la base de datos
        $archivoAnterior = $datosAnteriores['file'];
    
        // Subir el nuevo archivo si es que se ha enviado uno
        if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
            $archivoNuevo = $this->request->getFile('file');
            $nombreArchivoNuevo = $archivoNuevo->getRandomName();
            $archivoNuevo->move('resources/img', $nombreArchivoNuevo);
        }else{
            $nombreArchivoNuevo = $archivoAnterior;
        }
        
        // Actualizar los datos del registro
        $datosActualizados = [
            'nombre' => $this->input->post('nombre', true),
            'descripcion' => $this->input->post('descripcion', true),
            'fecha' => $this->input->post('fecha', true),
            'file' => $nombreArchivoNuevo
        ];
        $respuesta = $Crud->actualizar($id, $datosActualizados);
    
        // Si la actualización es exitosa y se ha subido un archivo nuevo, eliminamos el archivo anterior
        if($respuesta > 0 && $nombreArchivoNuevo != $archivoAnterior){
            unlink('resources/img/'.$archivoAnterior);
        }
    
        // Redirigimos al usuario a la página principal con un mensaje de éxito o error
        if($respuesta > 0) {
            return redirect()->to(base_url().'/')->with('mensaje','2');
        } else {
            return redirect()->to(base_url().'/')->with('mensaje','3');
        }
    }
   

    public function obtenerNombre($idNombre) {
        $data = ["id" => $idNombre];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerNombre($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
    }

    public function eliminar($id){
        $Crud = new CrudModel();
        $data = ["id" => $id];
        $data = ["file" =>  $this->request->getFile('file')->unlink('img/', )];

        $respuesta = $Crud->eliminar($data);
        if($respuesta) {
            return redirect()->to(base_url().'/')->with('mensaje','4');
        } else {
            return redirect()->to(base_url().'/')->with('mensaje','5');
    }
    }
    public function catalogo(){
        echo view('catalogo');
    }

    public function getLink(){
        return base_url('img/'. $this->file);
    }
    
}
