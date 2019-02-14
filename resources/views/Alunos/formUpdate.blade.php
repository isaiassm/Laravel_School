@extends('layout.head')

@section('title')
    Formulario de Atulização de registro de Alunos
@endsection
<div align="center">
<form action="{{route('alunos.updateaction', $aluno->id)}}" method="POST" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Nome:</label>
          <div class="col-sm-8">
          <input name="name" type="text" class="form-control" placeholder="nome" value="{{@$aluno->name}}">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Idade:</label>
          <div class="col-sm-8">
            <input name ="idade" type="text" class="form-control" placeholder="idade" value="{{@$aluno->idade}}">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Telefone:</label>
          <div class="col-sm-8">
            <input name ="telefone" type="text" class="form-control" placeholder="telefone" value="{{@$aluno->telefone}}">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Cpf:</label>
          <div class="col-sm-8">
            <input name ="cpf" type="text" class="form-control" placeholder="cpf" value="{{@$aluno->cpf}}">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Cep:</label>
          <div class="col-sm-8">
            <input name ="cep" type="text" class="form-control" placeholder="cep" value="{{@$aluno->cep}}">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Sexo:</label>
          <div class="col-sm-8">
            <input name ="sexo" type="text" class="form-control" placeholder="sexo" value="{{@$aluno->sexo}}">
          </div>
        </div>
        <button type="submit" class="btn btn-success" >Salvar</button>
      </form>
    </div>
    