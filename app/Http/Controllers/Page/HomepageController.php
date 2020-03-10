<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\TCategoria;
use App\TDestino;
use App\TPaquete;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $paquete = TPaquete::with('paquetes_destinos.destinos','paquetes_categoria.categoria', 'precio_paquetes')->get();

        $categoria = TCategoria::all();
        $destino = TDestino::where('estado', 1)->get();

        return view('page.home',
            compact(
                'paquete',
                'categoria',
                'destino'
            ));
    }
}
