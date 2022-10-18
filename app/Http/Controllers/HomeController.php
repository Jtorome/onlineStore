<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Página Principal - Tienda en Linea";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $data1 = "A cerca de - Tienda en Línea";
        $data2 = "Acerca de nosotros";
        $description = "Esta es una página a cerca de ...";
        $author = "Desarrollada por: Daniel - Paola";
        return view('home.about')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("description", $description)
        ->with("author", $author);
    }
}
