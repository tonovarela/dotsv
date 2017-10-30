<?php
namespace App\Http\DAO;

use DB;

class Usuario
{
    public function Login($nombre, $password)
    {
        return DB::select("select * from Usuarios where Nombre=:nombre  and Password=:password",
        [":nombre"=>$nombre,":password"=>$password]);
    }

    public function Listar()
    {
        return DB::select("select * from Usuarios");
    }
}
