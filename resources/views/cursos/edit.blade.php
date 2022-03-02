
@extends("template")

@section("title" , "Editar")
@section("conteudo")
<div class="container">
   
   <div class="row">
       <div class="col s12 m10">
           <h5>Editar Filme</h5>
        </div>
    </div>
   <div class="row">
       <div class="col s12 m10">
           <form action="{{route('movie.edit' , $result['id'])}}" method="POST"  enctype="multipart/form-data">
               <input type="hidden" name="_method" value="put">
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