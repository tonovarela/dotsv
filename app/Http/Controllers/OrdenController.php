<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\DAO\Orden;
 use DB;


class OrdenController extends Controller
{
    
    public function index(){
    
        $orden= new Orden();
        return $orden->Listar();

    }
}
