
<x-layout title="Adicionar Contato ">


<form action="{{route('contato.stores')}}" method="post">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf
<div class="mb-3">

<div class="col-8">
  <label for="nome" class="form-label">Nome</label>
  <input type="text" class="form-control" id="nome" name="nome"
   value=""  >
  </div>

  <div class="col-8">
  <label for="contato" class="form-label">Contato</label>
  <input type="text" class="form-control" id="contato" name="contato"
   value=""  >
  </div>

  <div class="col-8">
  <label for="email" class="form-label">E-mail</label>
  <input type="text" class="form-control" id="email" name="email"
   value=""  >
  </div>


</div>
<input class="btn btn-primary" type="submit" value="Submit">


</form>




</x-layout>

