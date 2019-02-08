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

    public function delete($id)
    {
        $listar = Aluno::find($id);
        $listar->delete();

        return redirect()->action('AlunoController@listar');
    }

    
}
