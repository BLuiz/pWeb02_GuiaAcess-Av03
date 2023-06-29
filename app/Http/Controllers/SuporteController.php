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

        return view('SuporteList')->with(['suportes' => $suportes]);
    }

    function create()
    {
        //$categorias = Categoria::orderBy('nome')->get();
        return view('SuporteForm');                                    //->with(['categorias' => $categorias]);
    }

    function store(Request $request)
    {
        $request->validate(
            Suporte::rules(),
            Suporte::messages()
        );

        $dados = [
            'nome'          => $request->nome,
            'email'     => $request->email,
            'assunto'      => $request->assunto,
            'mensagem'    => $request->mensagem

        ];

        $imagem = $request->file('imagem');
        $nome_arquivo = '';

        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';

            $imagem->storeAs($diretorio, $nome_arquivo, 'public');

            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        Suporte::create($dados);

        return \redirect('suporte')->with('success', 'Cadastrado com sucesso!');
    }

    function edit($id)
    {
        $suporte = Suporte::findOrFail($id);

        //$categorias = Categoria::orderBy('nome')->get();      //se tiver alguma chave estrangeira

        return view('SuporteForm')->with([
            'suporte' => $suporte,
            //'categorias' => $categorias                      //se tiver alguma chave estrangeira
        ]);
    }

    function show($id)
    {
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

        $dados = [
            'nome'          => $request->nome,
            'email'     => $request->email,
            'assunto'      => $request->assunto,
            'mensagem'    => $request->mensagem
        ];

        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imagem em uma pasta
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        Suporte::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect('suporte')->with('success', 'Atualizado com sucesso!');
    }

    function destroy($id)
    {
        $suporte = Suporte::findOrFail($id);

        $suporte->delete();

        return \redirect('suporte')->with('success', 'Removido com sucesso!');
    }

    function search(Request $request)
    {
        $suportes = Suporte::where(
            $request->campo,
            'like',
            '%' . $request->valor . '%'
        )->get();

        if(empty($suportes)){
            $suportes = Suporte::all();
        }

        return view('SuporteList')->with(['suportes' => $suportes]);
    }
}
