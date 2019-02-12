<?php

namespace App\Http\Controllers;

use \App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar()
    {
        $listar = Aluno::all();
        return view('Alunos.listagem')->with('listar', $listar);
    }

    public function form()
    {
        return view('Alunos.formAlunos');
    }

    public function inserir(Request $request)
    {
        Aluno::create($request->all());
        return redirect('/alunos')->withInput();
        
    }

    public function formUpdate($id)
    {
        $aluno = Aluno::find($id);
       
        return view('Alunos.formUpdate', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {
     
      $aluno = Aluno::where('id', $aluno->id)
      ->update([
        'name'=> $request->input('name'),
        'idade'=> $request->input('idade'),
        'telefone'=> $request->input('telefone'),
        'cpf'=> $request->input('cpf'),
        'cep'=> $request->input('cep'),
        'sexo'=> $request->input('sexo')

      ]);    
      

      if ($aluno) {
          return redirect()->route('alunos.index', ['aluno' =>$aluno->id]);
      }
            return back()->withInput();
         
        
    }

    public function delete($id)
    {
        $listar = Aluno::find($id);
        $listar->delete();

        return redirect()->action('AlunoController@listar');
    }

    
}
