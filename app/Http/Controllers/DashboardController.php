<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware("autenticado");
    }

    public function index()
    {
        return View("pages.dashboard.index");
    }
}
