
@extends('layout.head')

@section('title')
    Listagem de Alunos
@endsection



<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Telefone</th>
        <th scope="col">Cpf</th>
        <th scope="col">Cep</th>
        <th scope="col">Sexo</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($listar as $lista)
      <tr>
          <th scope="row">{{$lista->id}}</th>
          <td>{{$lista->name}}</td>
          <td>{{$lista->idade}}</td>
          <td>{{$lista->telefone}}</td>
          <td>{{$lista->cpf}}</td>
          <td>{{$lista->cep}}</td>
          <td>{{$lista->sexo}}</td>
         <td>
         <a class='text-success' href="/alunos/formUpdate/{{$lista->id}}"> Editar </a>
            <a class='text-dark' href="/alunos/delete/{{$lista->id}}"> Remover </a>
         </td>
        </tr>
     
      </tbody>
      @endforeach
  </table>