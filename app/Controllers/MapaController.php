<?php

namespace App\Controllers;

//usado en funcion mapa();
use App\Models\MapaRegistroModel;
use App\Models\ObrasModel;
use App\Models\CategoriasModel;

class MapaController extends BaseController
{
    public function index()
    {   
        $validation = \Config\Services::validation();
        return view('Admin/Front/V_mapa',['validation'=> $validation]);
    }

    public function guardarMapa()
    {
        if($this->validate('mapa')){
            ///terminar categoria foreach, crear modelo para la tabla
            ///terminar - falta validar datos formulario 
            $guardarLayerMap = new MapaRegistroModel();
            // Leer el archivo y almacenar su contenido en una variable
            $archivo = $this->request->getFile('geoJSON');
            $nombreArchivo = $archivo->getRandomName();
            $archivo->move('resources/JSON', $nombreArchivo);
            $data = [
                'map_Nombre'=> $this->request->getPost('nombreLayer'),
                'map_Archivo' => $nombreArchivo,
                
            ];
            $msg = [
                'tipo' => 'success', 'mensaje' => 'Registro exitoso'
            ];
            // Inserta los datos a la BD 
            $guardarLayerMap->guardarLayer($data);
            return view('Admin/Front/V_mapa', $msg);
        }else{
            $msg = [
                'tipo' => 'danger', 'mensaje' => 'Error al resgistrar su informacion, verifique sus datos',
            ];
            return view('Admin/Front/V_mapa', $msg);
        }
    }

public function filtrarArray(){
        ///Se consultan los mapas por tablas usando Switch
        $mapasObr = new ObrasModel();
        $opcion = $this->request->getPost('valor');
        switch ($opcion) {
            case 1:
                //Consultar mapas de banco de proyectos
                break;
            case 2:
                $capas = $mapasObr->obtenerMapasObras();
                return $this->response->setJSON($capas);
                break;
            case 3:
                    //Consultar mapas de puntos de interes
                break;
            default:
                // Consultar todo
                break;
        }

    }
}
    