<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Obra;

class ObrasCRUD extends Controller{

    public function index(){

        $obra = new Obra();
        $datos['obras'] = $obra->orderBy('obr_ID','ASC')->findAll();


        return view('Admin/ObrasCrud/V_Listar',$datos);
        
    }

    public function crear(){

        $obra = new Obra();
        $datos['obras'] = $obra->orderBy('obr_ID','ASC')->findAll();

        //$datos['categorias'] = $sitio->obtenerCategoria();

        return view('Admin/ObrasCrud/V_Crear', $datos);
    }

    public function guardar(){

        $obra = new Obra();

        //VALIDACION DE LOS DATOS
        $validacion = $this->validate([
            'obr_Nombre' => 'required|min_length[3]',
            'obr_Fecha' => 'required|min_length[1]',
            'obr_Foto' => [
                'uploaded[obr_Foto]',
                'mime_in[obr_Foto,image/jpg,image/jpeg,image/png]',
                'max_size[obr_Foto,3072]',
            ]
        ]);
        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje','revisar la información colocada');

            return redirect()->back()->withInput();

        }


        //INSERSION DE LOS DATOS
        if($imagen = $this->request->getFile('obr_Foto')){
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/resources/img/',$nuevoNombre);

            $datos = [
                'obr_Nombre'=>$this->request->getVar('obr_Nombre'),
                'obr_Fecha'=>$this->request->getVar('obr_Fecha'),
                'obr_Foto'=>$nuevoNombre
            ];
            $obra->insert($datos);
        }

        return $this->response->redirect(site_url('/Admin/ListarObras'));

    }

    public function borrar($obr_ID=null){
        $obra = new Obra();
        
        $datosObra = $obra->where('obr_ID',$obr_ID)->first();

        $ruta = ('../public/resources/img/'.$datosObra['obr_Foto']);
        unlink($ruta);

        $obra->where('obr_ID',$obr_ID)->delete($obr_ID);

        return $this->response->redirect(site_url('/Admin/ListarObras'));

    }

    public function editar($obr_ID=null){

        $obra = new Obra();

        $datos['obras'] = $obra->where('obr_ID',$obr_ID)->first();

        return view('Admin/ObrasCrud/V_Editar', $datos);
    }

    public function actualizar(){
        $obra = new Obra();
        $datos = [
            'obr_Nombre'=>$this->request->getVar('obr_Nombre'),
            'obr_Fecha'=>$this->request->getVar('obr_Fecha')
        ];
        $obr_ID = $this->request->getVar('obr_ID');

        //VALIDACION DE LOS DATOS
        $validacion = $this->validate([
            'obr_Nombre' => 'required|min_length[3]',
            'obr_Fecha' => 'required|min_length[1]',
        ]);
        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje','revisar la información colocada');

            return redirect()->back()->withInput();

        }

        //ACTUALIZACION DE LOS DATOS
        $obra->update($obr_ID,$datos);

        $validacion = $this->validate([
            'obr_Foto' => [
                'uploaded[obr_Foto]',
                'mime_in[obr_Foto,image/jpg,image/jpeg,image/png]',
                'max_size[obr_Foto,3072]',
            ]
        ]);

        if($validacion){

            if($imagen = $this->request->getFile('obr_Foto')){

                $datosObra = $obra->where('obr_ID',$obr_ID)->first();

                $ruta = ('../public/resources/img/'.$datosObra['obr_Foto']);
                unlink($ruta);


                $nuevoNombre = $imagen->getRandomName();
                $imagen->move('../public/resources/img/',$nuevoNombre);
    
                $datos = ['obr_Foto'=>$nuevoNombre];
                $obra->update($obr_ID,$datos);
            }
        }
        return $this->response->redirect(site_url('/Admin/ListarObras'));

    }

}