@extends('layout.head')

@section('title')
    Formulario de Alunos
@endsection
<div align="center">
<form action="/alunos/inserir" method="POST" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Nome:</label>
          <div class="col-sm-8">
            <input name="name" type="text" class="form-control" placeholder="nome">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Idade:</label>
          <div class="col-sm-8">
            <input name ="idade" type="text" class="form-control" placeholder="idade">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Telefone:</label>
          <div class="col-sm-8">
            <input name ="telefone" type="text" class="form-control" placeholder="telefone">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Cpf:</label>
          <div class="col-sm-8">
            <input name ="cpf" type="text" class="form-control" placeholder="cpf">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Cep:</label>
          <div class="col-sm-8">
            <input name ="cep" type="text" class="form-control" placeholder="cep">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-1 col-form-label">Sexo:</label>
          <div class="col-sm-8">
            <input name ="sexo" type="text" class="form-control" placeholder="sexo">
          </div>
        </div>
        <button type="submit" class="btn btn-success" >Salvar</button>
      </form>
    </div>
    