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
        $date = new DateTime();
        $gestion = new Gestion();
    	$gestion->fecha=$date->format('yy-mm-dd');
    	$gestion->montoIngreso=$request->get('ingreso');
        $gestion->montoEgreso=$request->get('egreso');
        $gestion->idUsuario='1';
    	return Redirect::to('gestion');

    }
    public function show($id)
    {
        return view ("gestion.show",["gestion"=>Gestion::findOrFail($id)]);
    }
}
