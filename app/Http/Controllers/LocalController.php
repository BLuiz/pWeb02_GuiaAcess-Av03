<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class LocalController extends Controller
{
    //Funções de Retorno de páginas
    function index()
    {
        $locals = Local::All();

        return view('LocalList')->with(['locals' => $locals]);      //verificar nome do arquivo LocalList.php
    }

    function create()
    {
        //$categorias = Categoria::orderBy('nome')->get();
        //dd($categorias);
        return view('ParticipeForm');                                    //->with(['categorias' => $categorias]);
    }

    function edit($id)
    {
        //select * from local where id = $id;
        $local = Local::findOrFail($id);

        //$categorias = Categoria::orderBy('nome')->get();      //se tiver alguma chave estrangeira

        return view('ParticipeForm')->with([
            'local' => $local,
            //'categorias' => $categorias                      //se tiver alguma chave estrangeira
        ]);
    }

    function show($id)
    {
        //select * from local where id = $id;
        $local = Local::findOrFail($id);

        //$categorias = Categoria::orderBy('nome')->get();      //se tiver alguma chave estrangeira

        return view('ParticipeForm')->with([
            'local' => $local,
            //'categorias' => $categorias,                      //se tiver alguma chave estrangeira
        ]);
    }

    function detalhe($id)
    {
        //select * from local where id = $id;
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
            'coordenada'    => $request->coordenada
        ];

        //imagem
        $imagem = $request->file('imagem');
        $nome_arquivo = '';

        if ($imagem) {
            $diretorio = 'imagem/';
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $imagem->storeAs($diretorio, $nome_arquivo, 'public');

            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        //acessibilidade
        $acessibilidade = array();
        //$input = $request->all();
        //dd($input);
        $tipo = ['caoGuia','lavabo','prioridade','palco','estacionamento','balcao','escada','rampa','elevador','refeitorio','sinalizacao','apoiador','outro'];

        foreach($tipo as $chave){
            if (boolval($request->$chave)) {
                array_push($acessibilidade, $request->$chave);
            }
        }

        $dados['acessibilidade'] = json_encode($acessibilidade);
        dd($dados);

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
            'coordenada'    => $request->coordenada
        ];

        //imagem
        $imagem = $request->file('imagem');
        $nome_arquivo = '';

        if ($imagem) {
            $diretorio = 'imagem/';
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $imagem->storeAs($diretorio, $nome_arquivo, 'public');

            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        //acessibilidade
        $acessibilidade = array();
        //$input = $request->all();
        //dd($input);
        $tipo = ['caoGuia','lavabo','prioridade','palco','estacionamento','balcao','escada','rampa','elevador','refeitorio','sinalizacao','apoiador','outro'];

        foreach($tipo as $chave){
            if (boolval($request->$chave)) {
                array_push($acessibilidade, $request->$chave);
            }
        }

        $dados['acessibilidade'] = json_encode($acessibilidade);
        dd($dados);

        //metodo para atualizar passando o vetor com os dados do form e o id
        Local::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect('local')->with('success', 'Atualizado com sucesso!');
    }

    function destroy($id)
    {
        $local = Local::findOrFail($id);

        //verifica se existe o arquivo vinculado ao registro e depois remove
        if (Storage::disk('public')->exists($local->imagem)) {
            Storage::disk('public')->delete($local->imagem);
        }
        $local->delete();

        return \redirect('local')->with('success', 'Removido com sucesso!');
    }

    function search(Request $request)               //talvez não esteja funcionando
    {
        if ($request->campo == 'nome') {
            $locals = Local::where(
                'nome',
                'like',
                '%' . $request->valor . '%'
            )->get();
        }else if ($request->campo == 'telefone') {
            $locals = Local::where(
                'telefone',
                'like',
                '%' . $request->valor . '%'
            )->get();
        }
        else {
            $locals = Local::all();
        }

        return view('LocalList')->with(['locals' => $locals]);      //verificar nome do arquivo LocalList.php
    }
}
