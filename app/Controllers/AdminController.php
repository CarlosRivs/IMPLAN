<?php

namespace App\Controllers;

//usado en funcion mapa();
use App\Models\MapaRegistroModel;
use App\Models\CategoriasModel;
use App\Models\RegistroUsrModel;
use App\Controllers\grocery_CRUD;
use App\Libraries\GroceryCrud;


class AdminController extends BaseController
{
    public function index()
    {   
        return view('Admin/V_Admin_Panel');
    }

    public function crud()
    {   
        return view('Admin/front/listado');
    }

    public function Graficas()
    {
        $usrEnRegistro = new RegistroUsrModel();
        $data['labels'] = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $data['data'] = $usrEnRegistro->consultarUsuarios();
        echo view('Admin/Estadisticas/V_Graficas', $data);
    }

    public function usuarios()
    {
        $crud = new GroceryCrud();
        $crud->setTheme('datatables');
	    $crud->setTable('usuario');
        $crud->setSubject('Usuarios');
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->unsetRead();
        $crud->fields(['Nombre', 'Apellidos']);
        $crud->columns(['usr_Nombre', 'usr_ApellidoPatr']);
	    $output = $crud->render();

        return view('Admin/V_Admin_Panel').view('Admin/Front/V_Administrador', (array)$output);
    }    
}