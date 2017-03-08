

@extends('painel.templates.template')

@section('content')
    <h1 class = "title-pg">Listagem de produtos</h1>
    <a href="{{route('produtos.create')}}" class="btn btn-default">Cadastrar Novo</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th width="100px">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>
            <a href="">
           <span class="glyphicon glyphicon-pencil edit" aria-hidden="true"></span>
            </a><a href="">
            <span class="glyphicon glyphicon-trash delete" aria-hidden="true"></span>
            </a>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>

  {{--  <html>
    <header>
        <title> {{ $title or 'Painel' }}</title>
    </header>
    <body>
    @yield('content');
    </body>
    </html>--}}

@endsection