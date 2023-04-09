<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Proyectos;

class ProyectosCRUD extends Controller{

    public function index(){

        $proyecto = new Proyectos();
        $datos['proyectos'] = $proyecto->orderBy('pro_ID','ASC')->findAll();


        return view('Admin/ProyectosCrud/V_Listar',$datos);
        
    }

    public function crear(){

        $proyecto = new Proyectos();
        $datos['proyectos'] = $proyecto->orderBy('pro_ID','ASC')->findAll();

        //$datos['categorias'] = $sitio->obtenerCategoria();

        return view('Admin/ProyectosCrud/V_Crear', $datos);
    }

    public function guardar(){

        $proyecto = new Proyectos();

        //VALIDACION DE LOS DATOS
        $validacion = $this->validate([
            'pro_Nombre' => 'required|min_length[3]',
            'pro_Descripcion' => 'required|min_length[5]',
            'pro_Fecha' => 'required|min_length[1]',
            'pro_Status' => 'required|min_length[1]',
            'pro_ArchRender' => [
                'uploaded[pro_ArchRender]',
                'mime_in[pro_ArchRender,application/pdf]',
                'max_size[pro_ArchRender,3072]',
            ]
        ]);

        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje','revisar la información colocada');

            return redirect()->back()->withInput();

        }


        //INSERSION DE LOS DATOS
        if($pdf = $this->request->getFile('pro_ArchRender')){
            $nuevoNombre = $pdf->getRandomName();
            $pdf->move('../public/resources/pdfs/',$nuevoNombre);

            $datos = [
                'pro_Nombre'=>$this->request->getVar('pro_Nombre'),
                'pro_Descripcion'=>$this->request->getVar('pro_Descripcion'),
                'pro_Fecha'=>$this->request->getVar('pro_Fecha'),
                'pro_Status'=>$this->request->getVar('pro_Status'),
                'pro_ArchRender'=>$nuevoNombre
            ];
            $proyecto->insert($datos);
        }

        return $this->response->redirect(site_url('/Admin/ListarProyectos'));

    }

    public function borrar($pro_ID=null){
        $proyecto = new Proyectos();
        $datosProyecto = $proyecto->where('pro_ID',$pro_ID)->first();

        $ruta = ('../public/resources/pdfs/'.$datosProyecto['pro_ArchRender']);
        unlink($ruta);

        $proyecto->where('pro_ID',$pro_ID)->delete($pro_ID);

        return $this->response->redirect(site_url('/Admin/ListarProyectos'));

    }

    public function editar($pro_ID=null){

        $proyecto = new Proyectos();

        $datos['proyectos'] = $proyecto->where('pro_ID',$pro_ID)->first();

        return view('Admin/ProyectosCrud/V_Editar', $datos);
    }

    public function actualizar(){
        $proyecto = new Proyectos();
        $datos = [
            'pro_Nombre'=>$this->request->getVar('pro_Nombre'),
            'pro_Descripcion'=>$this->request->getVar('pro_Descripcion'),
            'pro_Fecha'=>$this->request->getVar('pro_Fecha'),
            'pro_Status'=>$this->request->getVar('pro_Status')
        ];
        $pro_ID = $this->request->getVar('pro_ID');

        //VALIDACION DE LOS DATOS
        $validacion = $this->validate([
            'pro_Nombre' => 'required|min_length[3]',
            'pro_Descripcion' => 'required|min_length[5]',
            'pro_Fecha' => 'required|min_length[1]',
            'pro_Status' => 'required|min_length[1]',
        ]);
        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje','revisar la información colocada');

            return redirect()->back()->withInput();

        }

        //ACTUALIZACION DE LOS DATOS
        $proyecto->update($pro_ID,$datos);

        $validacion = $this->validate([
            'pro_ArchRender' => [
                'uploaded[pro_ArchRender]',
                'mime_in[pro_ArchRender,application/pdf]',
                'max_size[pro_ArchRender,3072]',
            ]
        ]);

        if($validacion){

            if($pdf = $this->request->getFile('pro_ArchRender')){

                $datosProyecto = $proyecto->where('pro_ID',$pro_ID)->first();

                $ruta = ('../public/resources/pdfs/'.$datosProyecto['pro_ArchRender']);
                unlink($ruta);


                $nuevoNombre = $pdf->getRandomName();
                $pdf->move('../public/resources/pdfs/',$nuevoNombre);
    
                $datos = ['pro_ArchRender'=>$nuevoNombre];
                $proyecto->update($pro_ID,$datos);
            }
        }
        return $this->response->redirect(site_url('/Admin/ListarProyectos'));

    }

}