<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Servicios - Laboratorio las penitas";
        $viewData["subtitle"] =  "Lista de servicios";
        $viewData["services"] = Service::all();
        return view('service.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $service = Service::findOrFail($id);
        $viewData["title"] = $service["name"]." - Laboratorio las penitas";
        $viewData["subtitle"] =  $service["name"]." - Información de Servicio";
        $viewData["service"] = $service;
        return view('service.show')->with("viewData", $viewData);
    }
}
