<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suporte;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class SuporteController extends Controller
{
    function index()
    {
        $suportes = Suporte::All();

        return view('SuporteList')->with(['suportes' => $suportes]);      //verificar nome do arquivo SuporteList.php
    }

    function create()
    {
        $categorias = Categoria::orderBy('nome')->get();
        //dd($categorias);
        return view('SuporteForm');                                    //->with(['categorias' => $categorias]);
    }

    function store(Request $request)
    {
        $request->validate(
            Suporte::rules(),
            Suporte::messages()
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'nome'          => $request->nome,
            'email'     => $request->email,
            'assunto'      => $request->assunto,
            'mensagem'    => $request->mensagem

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
        Suporte::create($dados);          //passa o vetor os dados do formulário para serem salvos

        return \redirect('suporte')->with('success', 'Cadastrado com sucesso!');
    }

    function edit($id)
    {
        //select * from Suporte where id = $id;
        $suporte = Suporte::findOrFail($id);

        //$categorias = Categoria::orderBy('nome')->get();      //se tiver alguma chave estrangeira

        return view('SuporteForm')->with([
            'suporte' => $suporte,
            //'categorias' => $categorias                      //se tiver alguma chave estrangeira
        ]);
    }

    function show($id)
    {
        //select * from Suporte where id = $id;
        $suporte = Suporte::findOrFail($id);

        //$categorias = Categoria::orderBy('nome')->get();      //se tiver alguma chave estrangeira

        return view('SuporteForm')->with([
            'suporte' => $suporte,
            //'categorias' => $categorias,                      //se tiver alguma chave estrangeira
        ]);
    }

    function update(Request $request)
    {
        $request->validate(
            Suporte::rules(),
            Suporte::messages()
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'nome'          => $request->nome,
            'email'     => $request->email,
            'assunto'      => $request->assunto,
            'mensagem'    => $request->mensagem
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
        Suporte::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect('Suporte')->with('success', 'Atualizado com sucesso!');
    }

    function destroy($id)
    {
        $suporte = Suporte::findOrFail($id);

        //verifica se existe o arquivo vinculado ao registro e depois remove
        if (Storage::disk('public')->exists($suporte->imagem)) {
            Storage::disk('public')->delete($suporte->imagem);
        }
        $suporte->delete();

        return \redirect('suporte')->with('success', 'Removido com sucesso!');
    }

    function search(Request $request)               //talvez não esteja funcionando
    {
        if ($request->campo == 'nome') {
            $suportes = Suporte::where(
                'nome',
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $suportes = Suporte::all();
        }

        return view('SuporteList')->with(['suportes' => $suportes]);      //verificar nome do arquivo SuporteList.php
    }
}
