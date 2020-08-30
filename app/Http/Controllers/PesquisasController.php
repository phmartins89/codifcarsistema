<?php


namespace App\Http\Controllers;
use App\Orcamento;
use illuminate\Http\Request;

class PesquisasController extends Controller
{

    public function index(Request $request){
        $pesquisas = Orcamento::all();

        return view('pesquisas.index',compact('pesquisas'));

    }

    public function create ()
    {
        return view( 'pesquisas.create');
    }

    public function store (Request $request)
    {
        $nome = $request ->nome;
        $orcamento = new Orcamento();
        $orcamento-> nome = $nome;
        var_dump($orcamento->save());

    }

}
