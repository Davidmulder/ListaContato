
<x-layout title="Detalhes Contato ">



<div class="shadow-none p-3 mb-5 bg-light rounded">

<p class="text-uppercase"> Nome: {{$contato->nome}}</p>

<p class="text-uppercase"> Contato: {{$contato->contato}}</p>

<p class="text-uppercase">Email: {{$contato->email}}</p>




<form action="{{route('contato.destroy',$contato->id)}}" method="post">
    @csrf
    <a href="{{route('contato.edit',$contato->id)}}" class="btn btn-primary">Editar</a>
    <button  class="btn btn-danger">Deletar</button>
    </form>

</div>





</x-layout>

