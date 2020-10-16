<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\GestionFormRequest;
use DB;

class GestionController extends Controller
{
    public function __constructor()
    {

    }
    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('searchText'));
    		$gestion=DB::table('Gestion')->where('idGestion','LIKE', '%'.$query.'%')
    		->orderBy('idGestion','desc')
    		->paginate(7);
    		return view('gestion.index',["gestiones"=>$gestion,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("gestion.create");
    }
    public function store(GestionFormResquest $request)
    {
        $gestion = new Gestion();
    	$gestion->fecha=$request->get('fecha');
    	$gestion->montoIngreso=$request->get('montoIngreso');
        $gestion->montoEgreso=$request->get('montoEgreso');
        $gestion->Utilidad=$request->get('Utilidad');
        $gestion->idUsuario=$request->get('idUsuario');
    	$gestion->save();
    	return Redirect::to('gestion');

    }
    public function show($id)
    {
        return view ("gestion.show",["gestion"=>Gestion::findOrFail($id)]);
    }
}
