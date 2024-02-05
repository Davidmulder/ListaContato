<x-layout title="Listagem Contatos ">





  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
   <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
</svg>

<a href="{{route('contato.create')}}" class="btn btn-dark mb-2 ">Adicionar Contato</a>



@isset($mensagemsucesso)
<div class="alert alert-primary" role="alert">
    {{$mensagemsucesso}}
</div>
@endisset



  <div class="row row-cols-auto">
<table id="table_id" class="table">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Contato</th>
            <th>E-mail</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($contato as $contato)

        <tr>
            <td>{{$contato->nome}} </td>
            <td>{{$contato->contato}}</td>
            <td>{{$contato->email}}</td>

            <td>

                <a role="button"  class="btn btn-info" href="{{route('contato.show',$contato->id)}}"   >  Visualizar </a>
            </td>
        </tr>
    @endforeach


    </tbody>
</table>



</div>

</div>


</x-layout>
