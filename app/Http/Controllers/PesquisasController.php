<?php


namespace App\Http\Controllers;

use App\Http\Requests\OrcamentosFormRequest;
use App\Orcamento;
use illuminate\Http\Request;


class PesquisasController extends Controller
{
    public function index(Request $request) {
        $orcamentos = Orcamento::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('pesquisas.index', compact('orcamentos', 'mensagem'));
    }

    public function create()
    {
        return view('pesquisas.create');
    }

    public function store(OrcamentosFormRequest $request)
    {
        $orcamentos = Orcamento::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Orcamento {$orcamentos->id} criado com sucesso {$orcamentos->nome}"
            );

        return redirect()->route('listar_orcamentos');
    }

    public function destroy(Request $request)
    {
        Orcamento::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Orçamento removido com sucesso"
            );
        return redirect()->route('listar_orcamentos');
    }
}
