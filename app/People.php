<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
	protected $table = 'peoples';

	protected $fillable =
	[ 'nome','email','cpf','key','analisar_1','analisar_2','analisar_3','analisar_4','aplicar_1','aplicar_2','aplicar_3','aplicar_4','avaliar_1','avaliar_2','avaliar_3','avaliar_4','compreender_1','compreender_2','compreender_3','compreender_4','criar_1','criar_2','criar_3','criar_4','criar_1','criar_2','criar_3','criar_4','memorizar_1','memorizar_2','memorizar_3','memorizar_4',
	];

	protected $guarded = ['id','created_at','updated_at'];

}

