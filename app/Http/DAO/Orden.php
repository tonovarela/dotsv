<?php
namespace App\Http\DAO;

use DB;

class Orden
{
    
    public function Listar()
    {
        return DB::select("select *  from Ordenes");
    }
}
