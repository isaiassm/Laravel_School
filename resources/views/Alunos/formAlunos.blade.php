@extends('layout.head')

@section('title')
    Formulario de Alunos
@endsection

<form >
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-1 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-1 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
        </div>
      </form>