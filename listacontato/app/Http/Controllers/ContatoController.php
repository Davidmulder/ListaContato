<?php

namespace App\Http\Controllers;
use App\Models\Contato;
use App\Models\User;
use App\Http\Requests\ContatoFormRequest;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    // index

    public function Index()
    {
        $mensagemsucesso=session('mensagem.sucesso');

        $contato=Contato::all();

        return view('contato.index')->with("contato",$contato)->with('mensagemsucesso',$mensagemsucesso);

    }


    public function create() #formulario de cadastro
    {

        return view('contato.create');
    }
    

    public function store(ContatoFormRequest $request) #adicionar usuario
    {
       // dd($request);
       $mensagemsucesso=session('mensagem.sucesso');
        $data=$request->all();
        Contato::create($data);

        return redirect()->route('contato.index')->with('mensagem.sucesso',"Usuario '{$request->nome}' adicionada");
    }




    public function show(string|int $id)  #destalhes do cadastro
    {
        // dd($id);
       // Contato::find($id)
       // Contato::where('id',$id)->first()
       // Contato::where('id','!=',$id)->first()

        if(!$dado=Contato::find($id)){
            return back();
        }

        return view('contato.show')->with("contato",$dado);
    }




    public function edit(string|int $id)  #editar
    {
        if(!$dado=Contato::find($id)){
            return back();
        }

        return view('contato.edit')->with("contato",$dado);
    }





    public function update(ContatoFormRequest $request)  #atualizar
    {
        if(!$dado=Contato::find($request->id)){
            return back();
        }
        $dado->update($request->only([
          'nome','contato','email'
        ]));
        return redirect()->route('contato.index')
                         ->with('mensagem.sucesso','Contato atualizada ');
    }


    public function destroy(Request $request)  #deletar
    {
        if(!$dado=Contato::find($request->id)){
            return back();
        }
        $dado->delete();
        return redirect()->route('contato.index')
                         ->with('mensagem.sucesso','Contato deletado ');
    }



}
