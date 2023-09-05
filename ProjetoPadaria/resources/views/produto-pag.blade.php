<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/app.css">
        <title>Produtos</title>
    </head>
    <body>
    <h1><b>Cadastro<b></h1>
        <br>
    <form method="post" action="/produto-pag">
    {{ csrf_field() }}
        <input type="text" placeholder= "Nome"name="txProduto" />
        <input type="text" placeholder= "Descrição"name="txDesc" />
        <input type="number" placeholder= "Valor" name="txValor" step="0.01" inputmode="decimal" />
        <input type="date" name="txData" />
        

        <input type="submit" value="Salvar" />
    </form>

        <h1><b>Produtos<b></h1>
        <table class="table table-bordered border-primary">

            <tr>
                <th scope="col">Nome:</th>
                <th scope="col">Descrição:</th>
                <th scope="col">Valor:</th>
                <th scope="col">Data de Validade:</th>
            </tr>
            @foreach($produtos as $p)

            <tr>
                <td>{{$p->produto}}</td>
                <td>{{$p->descProduto}}</td>
                <td>{{$p->valorProduto}}</td>
                <td>{{$p->dataValidade}}</td>
            </tr>
            
            @endforeach

        </table>
    </body>
</html>