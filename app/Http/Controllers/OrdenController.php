<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordenes;
//  use App\Http\DAO\Orden;
 use DB;


class OrdenController extends Controller
{
    
    public function index(){
    

        return Ordenes::with(["cliente",'ordenitems','ordenitems.item'])->get();
        // $orden= new Orden();
        // return $orden->Listar();

    }
}
