<?php

namespace App\Http\Controllers;
use App\Empresa;
use Illuminate\Http\Request;
class EmpresaContoller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function listaEmpresas(){
        $empresas = Empresa::all();
        return response()->json($empresas , 500);

    }
  
    public function empresaPorId($id){
        return response()->json(Empresa::find($id));
    }
  
    public function criaEmpresa(Request $resquest){
        $empresa = Empresa::create($resquest->all());
        return response()->json($empresa,201);
    }
  
    public function deletaEmpresa(){
        Empresa::findOrFail($id)->delete();
        return response('Empresa removida com sucesso', 200);
    }
  
    public function atualisaEmpresa($id, Request $resquest){
        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());
        return response()->json($empresa, 200);
    }
    
}