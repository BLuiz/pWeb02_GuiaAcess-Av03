<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $table = "local";

    protected $fillable = [
        'nome', 'descricao', 'contato', 'coordenada', 'imagem','acessibilidade', //vetor?
        'avaliacao', 'comentario'
    ];

    public static function rules(){
        return  [
            'nome'          => 'required | max: 50',
            'descricao'     => 'nullable | max: 200',
            'telefone'      => 'required | max: 20',
            'coordenada'    => 'required | max: 20',
            'imagem'        => 'required | image | mimes:jpeg,jpg,png | max:2048',
            'acessibilidade'=> 'required', //?
            /*
            'avaliacao'     => 'nullable', 
            'comentario'    => 'nullable'
            */
        ];
    }

    public static function messages(){
        return [
            'nome.required'             => 'O nome é obrigatório',
            'telefone.required'         => 'O telefone é obrigatório',
            'coordenada.required'       => 'As coordenadas são obrigatórias',
            'imagem.required'           => 'O imagem é obrigatória',
            'acessibilidade.required'   => 'A acessibilidade é obrigatória',

            'nome.max'                  => 'Só é permitido 50 caracteres',
            'descricao.max'             => 'Só é permitido 200 caracteres',
            'telefone.max'              => 'Só é permitido 20 caracteres',
            'coordenada.max'            => 'Só é permitido 20 caracteres'
        ];
    }
}
