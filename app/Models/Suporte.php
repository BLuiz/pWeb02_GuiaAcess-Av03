<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    use HasFactory;
    protected $table = "suporte";

    protected $fillable = [
        'nome', 'email', 'assunto', 'mensagem'
    ];

    public static function rules(){
        return  [
            'nome'          => 'required | max: 50',
            'email'     => 'nullable | max: 200',
            'assunto'      => 'required | max: 150',
            'mensagem'    => 'required | max: 999'
        ];
    }

    public static function messages(){
        return [
            'nome.required'             => 'O nome é obrigatório',
            'email.required'         => 'O telefone é obrigatório',
            'assunto.required'       => 'As coordenadas são obrigatórias',
            'mensagem.required'           => 'O imagem é obrigatória',

            'nome.max'                  => 'Só é permitido 50 caracteres',
            'email.max'             => 'Só é permitido 200 caracteres',
            'assunto.max'              => 'Só é permitido 150 caracteres',
            'mensagem.max'            => 'Só é permitido 999 caracteres'
        ];
    }
}
