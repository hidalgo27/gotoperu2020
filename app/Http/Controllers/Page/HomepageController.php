<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\TCategoria;
use App\TDestino;
use App\THotel;
use App\THotelDestino;
use App\TPaquete;
use App\TPaqueteCategoria;
use App\TPaqueteDestino;
use App\TPaqueteDificultad;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $paquete = TPaquete::with('paquetes_destinos.destinos','paquetes_categoria.categoria', 'precio_paquetes')->get();

        $categoria = TCategoria::all();
        $destino = TDestino::where('estado', 0)->get();

        return view('page.index',
            compact(
                'paquete',
                'categoria',
                'destino'
            ));
    }
    public function detail($url){

        $paquete = TPaquete::where('url', $url)->get();
        $dificultad = TPaqueteDificultad::all();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

        $destino = TDestino::where('estado', 0)->get();


        return view('page.detail', compact('paquete', 'dificultad', 'paquete_destinos','hoteles','hoteles_destinos','destino'));

    }

    public function load(Request $request){
        $paquetes = TPaquete::with('precio_paquetes')->where('estado',1)->get();
        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();
        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

    }

    public function load_all(Request $request){
        $paquetes = TPaquete::with('precio_paquetes')->get();
        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();
        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

    }

    public function agregar(Request $request){
        $var = ''; $var2 = ''; $var3 = '';
        if ($request->destinoSelected){
            foreach ($request->destinoSelected as $destinos){
                if (isset($destinos)){
                    $var.=$destinos.',';
                }
            }
        }else{
            $var = 0;
        }

        $nombre2 = explode(',',$var);

        if (($request->categoriaSelected)){
            foreach ($request->categoriaSelected as $categoria){
                if (isset($categoria)){
                    $var2.=$categoria.',';
                }
            }
        }else{
            $var2 = 0;
        }
        $category_arr = explode(',',$var2);

        if (($request->tiempoSelected)){
            foreach ($request->tiempoSelected as $duration){
                if (isset($duration)){
                    $var3.=$duration;
                }
            }
            $duration_e = explode('-', $var3);
            $duration1 = $duration_e[0];
            $duration2 = $duration_e[1];
        }else{
            $var3 = 0;
        }

        if ($var AND $var2 == 0 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->get();
        }

        if ($var == 0 AND $var2 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->whereIn('idcategoria', $category_arr);
                }
            ])->get();
        }

        if ($var == 0 AND $var2 == 0 AND $var3){
            $paquetes = TPaquete::whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var == 0 AND $var2 == 0 AND $var3 == 0){
            $paquetes = 0;
        }

        if ($var AND $var2 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                },
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->get();
        }

        if ($var AND $var2 == 0 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var == 0 AND $var2 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var AND $var2 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                },
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }


//        $paquetes = TPaqueteDestino::with('paquetes','destinos')->whereIn('iddestinos', $nombre2)->get();

        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();


        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

//        return "ok";

//            return Response::json($request->destinosNueva, 200);
//        $nota = new Nota();
//        $nota->nombre = $request->nombre;
//        $nota->descripcion = $request->descripcion;
//        $nota->user_id = auth()->id();
//        $nota->save();
    }

    public function packages(){
        $destino = TDestino::where('estado', 0)->get();
        return view('page.packages',compact('destino'));
    }

}
