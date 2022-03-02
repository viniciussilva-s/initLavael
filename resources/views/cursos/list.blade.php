
@extends("template")

@section("title" , "Lista")
@section("conteudo")
<div class="container">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Imagem</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($list_courses))
                @foreach($list_courses as $curso) 
                    <tr>
                        <td>{{$curso["titulo"]}}</td>
                        <td>{{$curso["descricao"]}}</td>
                        <td>
                            <img width="120" src="{{asset($curso['img'])}}" alt="">
                        </td>
                        <td>
                            <a class="btn waves-effect waves-light" href="{{route('movie.edit' , $curso['id'])}}">
                                Editar
                                <i class="material-icons right ">edit_note</i>
                            </a>
                            <a class="btn waves-effect red" href="{{route('movie.delete' , $curso['id'])}}">
                                Deletar
                                <i class="material-icons right">delete_sweep</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection