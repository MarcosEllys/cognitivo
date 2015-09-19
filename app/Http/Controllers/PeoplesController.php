<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

      $peoples = \App\People::paginate(10);
      return view('peoples/index')->withPeoples($peoples);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
      $encode = $request['nome']+$request['cpf']+date('Y-m-d H:i:s');
      $encode = md5($encode);
      \App\People::create([
        'nome' => $request['nome'],
        'email' => $request['email'],
        'cpf' => $request['cpf'],
        'cpf' => $request['cpf'],
        'compreender_1' => $request['compreender_1'],
        'compreender_2' => $request['compreender_2'],
        'compreender_3' => $request['compreender_3'],
        'compreender_4' => $request['compreender_4'],
        'avaliar_1' => $request['avaliar_1'],
        'avaliar_2' => $request['avaliar_2'],
        'avaliar_3' => $request['avaliar_3'],
        'avaliar_4' => $request['avaliar_4'],
        'analisar_1' => $request['analisar_1'],
        'analisar_2' => $request['analisar_2'],
        'analisar_3' => $request['analisar_3'],
        'analisar_4' => $request['analisar_4'],
        'memorizar_1' => $request['memorizar_1'],
        'memorizar_2' => $request['memorizar_2'],
        'memorizar_3' => $request['memorizar_3'],
        'memorizar_4' => $request['memorizar_4'],
        'aplicar_1' => $request['aplicar_1'],
        'aplicar_2' => $request['aplicar_2'],
        'aplicar_3' => $request['aplicar_3'],
        'aplicar_4' => $request['aplicar_4'],
        'criar_1' => $request['criar_1'],
        'criar_2' => $request['criar_2'],
        'criar_3' => $request['criar_3'],
        'criar_4' => $request['criar_4'],
        'key' => $encode
        ]);
        return "A porra deu certo e salvou";
        // return self->result($enconde);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    public function result($key)
    {
      $pesquisa = \App\People::where('key','=',$key)->get();


      return view('resultado')->withPesquisa($pesquisa);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
  }
