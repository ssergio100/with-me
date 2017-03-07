<h1> Lista de Produtos</h1>

<table>
    <tr>
<td>Nome</td>
<td>Descrição</td>
        </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{$product->nome}}</td>
        <td>{{$product->descricao}}</td>
    </tr>
        @endforeach
</table>