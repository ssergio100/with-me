@extends('painel.templates.template')

@section('content')
    <h1 class="title-pg">Cadastro de produto</h1>

    <form class="form" method="post" action="{{route('produtos.store')}}">

    {!!csrf_field ()!!}

       <div class="form-group">
        <input class="form-control" type="text" name ="name" placeholder="*nome">
       </div>
        <div class="form-group">
        <label>
        <input type="checkbox" name="active" value="1" placeholder="*nome">
            Ativo
        </label>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="number" placeholder="*numero">
        </div>
        <div class="form-group">
        <select name="category">
            @foreach($categorys as $category)
                <option>{{ $category}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" placeholder="*descrição"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>

@endsection