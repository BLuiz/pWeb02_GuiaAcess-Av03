<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class LocalController extends Controller
{
    function index()
    {
        $locals = Local::All();

        return view('UsuarioList')->with(['locals' => $locals]);      //verificar nome do arquivo LocalList.php
    }

    function create()
    {
        $categorias = Categoria::orderBy('nome')->get();
        //dd($categorias);
        return view('ParticipeForm');                                    //->with(['categorias' => $categorias]);
    }

    function store(Request $request)
    {
        $request->validate(
            Local::rules(),
            Local::messages()
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'nome'          => $request->nome,
            'descricao'     => $request->descricao,
            'telefone'      => $request->telefone,
            'coordenada'    => $request->coordenada,
            'acessibilidade'=> $request->acessibilidade
        ];

        $imagem = $request->file('imagem');
        $nome_arquivo = '';


        if ($imagem) {                  //verifica existência de imagem
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';     //salva a imagem em uma pasta

            $imagem->storeAs($diretorio, $nome_arquivo, 'public');

            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        //dd( $request->nome);
        Local::create($dados);          //passa o vetor os dados do formulário para serem salvos

        return \redirect('local')->with('success', 'Cadastrado com sucesso!');
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

    function update(Request $request)
    {
        $request->validate(
            Local::rules(),
            Local::messages()
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'nome'          => $request->nome,
            'descricao'     => $request->descricao,
            'telefone'      => $request->telefone,
            'coordenada'    => $request->coordenada,
            'acessibilidade'=> $request->acessibilidade
        ];

        $imagem = $request->file('imagem');
        //verifica se o campo imagem foi passado uma imagem
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imagem em uma pasta
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

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
        } else {
            $locals = Local::all();
        }

        return view('LocalList')->with(['locals' => $locals]);      //verificar nome do arquivo LocalList.php
    }
}
