<?php
namespace App\Http\DAO;

use DB;

class Usuario
{
    public function Login($nombre, $password)
    {
        return DB::select("select * from usuario where nombre=:nombre  and password=:password",
        [":nombre"=>$nombre,":password"=>$password]);
    }

    public function Listar()
    {
        return DB::select("select * from usuario");
    }
}
