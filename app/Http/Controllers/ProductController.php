<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public static $products = [
    //     ["id"=>"1", "name"=>"Reloj", "description"=>"Reloj Inteligente Tranyago", "image" => "smartwatch.png", "price"=>"1000000"],
    //     ["id"=>"2", "name"=>"Audifonos", "description"=>"Audífonos inalámbricos Sony 1000X", "image" => "headset.png", "price"=>"800000"],
    //     ["id"=>"3", "name"=>"Celular", "description"=>"Samsung Galaxy S10 +", "image" => "smartphone.png", "price"=>"2109999"],
    //     ["id"=>"4", "name"=>"Lentes", "description"=>"Lentes Ray Ban RB3136", "image" => "rayban.png", "price"=>"549000"]
    // ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Productos - Tienda en Línea";
        $viewData["subtitle"] =  "Lista de Productos";
        // $viewData["products"] = ProductController::$products;
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product["name"]." - Tienda en Línea";
        $viewData["subtitle"] =  $product["name"]." - Información de Producto";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
