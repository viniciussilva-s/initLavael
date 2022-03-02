<div class="row">
    <div class="input-field col s12 m8">
        <input name="titulo" id="titulo" type="text" class="validate" value="{{isset($result->titulo)? $result->titulo:''}}">
        <label for="titulo">Titulo</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m8">
        <input name="descricao" id="descricao" type="text" class="validate" value="{{isset($result->descricao)? $result->descricao:''}}">
        <label for="descricao">Descrição</label>
    </div>
</div>
@if(isset($result->img))
<div class="row">
    <div class="col s12 m8">
        <img width="120" src="{{asset($result->img)}}" alt="">
    </div>
</div>
@endif
<div class="row">
    <div class="file-field input-field col s12 m8">
        <div class="btn">
            <span>File</span>
            <input type="file" id="img"  name="img">
        </div>
        <div  class="file-path-wrapper">    
            <input class="file-path validate" type="text">
        </div>
    </div>
</div>
