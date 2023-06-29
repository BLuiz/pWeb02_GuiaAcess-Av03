<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Local;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    //Funções de retorno de Páginas
    function index()
    {
        $feedbacks = Feedback::All();
        // dd($feedbacks);

        return view('FeedbackList')->with(['feedbacks' => $feedbacks]);
    }

    function create()
    {
        $locals = Local::orderBy('nome')->get();
        $users = User::orderBy('name')->get();
        //dd($users);
        return view('FeedbackForm')->with([
            'locals' => $locals,
            'users' => $users,
        ]);
    }

    function edit($id)
    {
        //select * from feedback where id = $id;
        $feedback = Feedback::findOrFail($id);
        //dd($feedback);
        $locals = Local::orderBy('nome')->get();
        $users = User::orderBy('name')->get();

        return view('FeedbackForm')->with([
            'feedback' => $feedback,
            'locals' => $locals,
            'users' => $users,
        ]);
    }

    function show($id)
    {
        //select * from feedback where id = $id;
        $feedback = Feedback::findOrFail($id);
        //dd($feedback);
        $locals = Local::orderBy('nome')->get();
        $users = User::orderBy('name')->get();

        return view('FeedbackForm')->with([
            'feedback' => $feedback,
            'locals' => $locals,
            'users' => $users,
        ]);
    }

    //Funções no Banco
    function store(Request $request)
    {
        $request->validate(
            Feedback::rules(),
            Feedback::messages()
        );

        //adiciono os dados do formulário ao vetor
        $dados = [
            'local_id'  => $request->local_id,
            'avaliacao' => $request->avaliacao,
            'nota'      => $request->nota,
            'users_id'   => $request->users_id,
        ];

        $imagem = $request->file('imagem');
        $nome_arquivo = '';
        //verifica se o campo imagem foi passado uma imagem
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imagem em uma pasta
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        //dd( $request->nome);
        //passa o vetor com os dados do formulário como parametro para ser salvo
        Feedback::create($dados);

        return \redirect('feedback')->with('success', 'Cadastrado com sucesso!');

    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            Feedback::rules(),
            Feedback::messages()
        );

        //adiciono os dados do formulário ao vetor
        $dados =  [
            'local_id'  => $request->local_id,
            'avaliacao' => $request->avaliacao,
            'nota'      => $request->nota,
            'users_id'   => $request->users_id,
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
        Feedback::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect('feedback')->with('success', 'Atualizado com sucesso!');
    }

    function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);

        //verifica se existe o arquivo vinculado ao registro e depois remove
        $feedback->delete();

        return \redirect('feedback')->with('success', 'Removido com sucesso!');
    }

    function search(Request $request)
    {
        $feedbacks = Feedback::where(
            $request->campo,
            'like',
            '%' . $request->valor . '%'
        )->get();

        if(empty($feedbacks)){
            $feedbacks = Feedback::all();
        }

        return view('FeedbackList')->with(['feedbacks' => $feedbacks]);
    }
}
