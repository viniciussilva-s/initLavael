
@extends("template")

@section("title" , "Adicionar")
@section("conteudo")
<div class="container">
   
   <div class="row">
       <div class="col s12 m10">
           <h5>Adicionar Filme</h5>
        </div>
    </div>
   <div class="row">
       <div class="col s12 m10">
           <form action="{{route('movie.created')}}" method="POST"  enctype="multipart/form-data">
                @csrf

                @include("cursos/_form")
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
       </div>
   </div>
</div>
@endsection