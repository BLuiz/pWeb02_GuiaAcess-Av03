<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class LocalController extends Controller
{
    //Funções de Retorno de páginas
    function index()
    {
        $locals = Local::All();

        return view('LocalList')->with(['locals' => $locals]);
    }

    function create()
    {
        //$categorias = Categoria::orderBy('nome')->get();
        return view('ParticipeForm');                    //->with(['categorias' => $categorias]);
    }

    function edit($id)
    {
        $local = Local::findOrFail($id);

        //$categorias = Categoria::orderBy('nome')->get();      //se tiver alguma chave estrangeira

        return view('ParticipeForm')->with([
            'local' => $local,
            //'categorias' => $categorias                      //se tiver alguma chave estrangeira
        ]);
    }

    function show($id)
    {
        $local = Local::findOrFail($id);

        //$categorias = Categoria::orderBy('nome')->get();      //se tiver alguma chave estrangeira

        return view('ParticipeForm')->with([
            'local' => $local,
            //'categorias' => $categorias,                      //se tiver alguma chave estrangeira
        ]);
    }

    function detalhe($id)
    {
        $local = Local::findOrFail($id);

        //$categorias = Categoria::orderBy('nome')->get();      //se tiver alguma chave estrangeira

        return view('DetalheLocal')->with([
            'local' => $local,
            //'categorias' => $categorias,                      //se tiver alguma chave estrangeira
        ]);
    }

    //Funções do Banco
    function store(Request $request)
    {
        $request->validate(
            Local::rules(),
            Local::messages()
        );

        $dados = [
            'nome'          => $request->nome,
            'descricao'     => $request->descricao,
            'telefone'      => $request->telefone,
            'coordenada'    => $request->coordenada,
            'acessibilidade'=> json_encode($request->acessibilidade)
        ];

        $imagem = $request->file('imagem');
        $nome_arquivo = '';

        if ($imagem) {
            $diretorio = 'imagem/';
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $imagem->storeAs($diretorio, $nome_arquivo, 'public');

            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        Local::create($dados);

        return \redirect('local')->with('success', 'Cadastrado com sucesso!');
    }

    function update(Request $request)
    {
        $request->validate(
            Local::rules(),
            Local::messages()
        );

        $dados = [
            'nome'          => $request->nome,
            'descricao'     => $request->descricao,
            'telefone'      => $request->telefone,
            'coordenada'    => $request->coordenada,
            'acessibilidade'=> json_encode($request->acessibilidade)
        ];

        $imagem = $request->file('imagem');

        if ($imagem) {
            $diretorio = 'imagem/';
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $imagem->storeAs($diretorio, $nome_arquivo, 'public');

            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        Local::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect('local')->with('success', 'Atualizado com sucesso!');
    }

    function destroy($id)
    {
        $local = Local::findOrFail($id);

        if(!empty($local->imagem)){
        if (Storage::disk('public')->exists($local->imagem)) {
            Storage::disk('public')->delete($local->imagem);
        }}

        $local->delete();

        return \redirect('local')->with('success', 'Removido com sucesso!');
    }

    function search(Request $request)
    {
        $locals = Local::where(
            $request->campo,
            'like',
            '%' . $request->valor . '%'
        )->get();

        if(empty($locals)){
            $locals = Local::all();
        }

        return view('LocalList')->with(['locals' => $locals]);
    }
}
