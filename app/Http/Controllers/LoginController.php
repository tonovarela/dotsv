<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\DAO\Usuario;
use Redirect;
use Session;
use Validator;
use PDF;
use App;

class LoginController extends Controller
{

    public function index()
    {
        if (Session::has('usuario')) {
            return Redirect::to("dashboard");
        }
        return View('pages.acceso.login');
    }

    public function store(LoginRequest $request)
    {
        $usuario= new Usuario();
        if ($usuario->Login($request->usuario, $request->password)) {
            Session::put("usuario", $request->usuario);
            return Redirect::to("dashboard");
        } else {
            Session::flash("login", "Usuario no válido");
            return Redirect::to("acceso/login");
        }
    }
    public function logout()
    {
        Session::flush();
        Session::flash("logout", "La sesión se  ha cerrado");
        return Redirect::to("acceso/login");
    }





    
/*  Prueba de Peticion AJAX  este metodo se consume desde api/v1/login */

    public function listar(Request $request)
    {
        return $request->data;
    }

    public function test(Request $request)
    {
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();


        $data=array("texto"=>$request->texto);
        $pdf = PDF::loadView('salida', $data);
         return $pdf->stream();
        //return $pdf->download('invoice.pdf');


    }
  
}
