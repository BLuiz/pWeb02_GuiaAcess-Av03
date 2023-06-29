<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = "feedback";

    protected $fillable = [
        'nota', 'avaliacao', 'local_id', 'user_id'
    ];

    public function local(){
        return $this->belongsTo(Local::class,'local_id','id');
    }
    public function users(){        //aqui pode ser que dê erro
        return $this->belongsTo(User::class,'user_id','id');
    }

    public static function rules(){
        return  [
            'nota' => 'required | max: 5',
            'avaliacao' => 'required | max: 200',
        ];
    }

    public static function messages(){
        return [
            'nota.required' => 'O nome é obrigatório',
            'avaliacao.max' => 'Só é permitido 200 caracteres',
        ];
    }
}
