<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\sitio;
use App\Models\ObtenerCatSitios;

class SitiosCRUD extends Controller{

    public function index(){

        $sitio = new Sitio();
        $datos['sitios'] = $sitio->orderBy('sit_ID','ASC')->findAll();


        return view('Admin/SitiosCrud/V_Listar',$datos);
        
    }

    public function crear(){

        $sitio = new Sitio();
        $datos['sitios'] = $sitio->orderBy('sit_ID','ASC')->findAll();

        //$datos['categorias'] = $sitio->obtenerCategoria();

        return view('Admin/SitiosCrud/V_Crear', $datos);
    }

    public function guardar(){

        $sitio = new Sitio();

        //VALIDACION DE LOS DATOS
        $validacion = $this->validate([
            'sit_Nombre' => 'required|min_length[3]',
            'sit_Descripcion' => 'required|min_length[5]',
            'sit_Foto' => [
                'uploaded[sit_Foto]',
                'mime_in[sit_Foto,image/jpg,image/jpeg,image/png]',
                'max_size[sit_Foto,3072]',
            ]
        ]);
        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje','revisar la información colocada');

            return redirect()->back()->withInput();

        }


        //INSERSION DE LOS DATOS
        if($imagen = $this->request->getFile('sit_Foto')){
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/resources/img/',$nuevoNombre);

            $datos = [
                'sit_Nombre'=>$this->request->getVar('sit_Nombre'),
                'sit_Descripcion'=>$this->request->getVar('sit_Descripcion'),
                'sit_Foto'=>$nuevoNombre
            ];
            $sitio->insert($datos);
        }

        return $this->response->redirect(site_url('/Admin/ListarSitios'));

    }

    public function borrar($sit_ID=null){
        $sitio = new Sitio();
        $datosSitio = $sitio->where('sit_ID',$sit_ID)->first();

        $ruta = ('../public/resources/img/'.$datosSitio['sit_Foto']);
        unlink($ruta);

        $sitio->where('sit_ID',$sit_ID)->delete($sit_ID);

        return $this->response->redirect(site_url('/Admin/ListarSitios'));

    }

    public function editar($sit_ID=null){

        $sitio = new Sitio();

        $datos['sitio'] = $sitio->where('sit_ID',$sit_ID)->first();

        return view('Admin/SitiosCrud/V_Editar', $datos);
    }

    public function actualizar(){
        $sitio = new Sitio();
        $datos = [
            'sit_Nombre'=>$this->request->getVar('sit_Nombre'),
            'sit_Descripcion'=>$this->request->getVar('sit_Descripcion')
        ];
        $sit_ID = $this->request->getVar('sit_ID');

        //VALIDACION DE LOS DATOS
        $validacion = $this->validate([
            'sit_Nombre' => 'required|min_length[3]',
            'sit_Descripcion' => 'required|min_length[5]',
        ]);
        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje','revisar la información colocada');

            return redirect()->back()->withInput();

        }

        //ACTUALIZACION DE LOS DATOS
        $sitio->update($sit_ID,$datos);

        $validacion = $this->validate([
            'sit_Foto' => [
                'uploaded[sit_Foto]',
                'mime_in[sit_Foto,image/jpg,image/jpeg,image/png]',
                'max_size[sit_Foto,3072]',
            ]
        ]);

        if($validacion){

            if($imagen = $this->request->getFile('sit_Foto')){

                $datosSitio = $sitio->where('sit_ID',$sit_ID)->first();

                $ruta = ('../public/resources/img/'.$datosSitio['sit_Foto']);
                unlink($ruta);


                $nuevoNombre = $imagen->getRandomName();
                $imagen->move('../public/resources/img/',$nuevoNombre);
    
                $datos = ['sit_Foto'=>$nuevoNombre];
                $sitio->update($sit_ID,$datos);
            }
        }
        return $this->response->redirect(site_url('/Admin/ListarSitios'));

    }

}