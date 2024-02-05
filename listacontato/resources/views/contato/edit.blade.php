<x-layout title="Editar Contato ">



<form action="{{route('contato.update')}}" method="post">

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
@method('PUT')
<div class="mb-3">

<div class="col-8">
  <label for="nome" class="form-label">Nome</label>
  <input type="text" class="form-control" id="nome" name="nome"
   value="{{$contato->nome}}"  >
  </div>

  <div class="col-8">
  <label for="contato" class="form-label">Contato</label>
  <input type="text" class="form-control" id="contato" name="contato"
   value="{{$contato->contato}}"  >
  </div>

  <div class="col-8">
  <label for="email" class="form-label">E-mail</label>
  <input type="text" class="form-control" id="email" name="email"
   value="{{$contato->email}}"  >
  </div>

  <input type="hidden" id="id" name="id" value="{{$contato->id}}">
</div>
<input class="btn btn-primary" type="submit" value="Gravar">


</form>




</x-layout>
