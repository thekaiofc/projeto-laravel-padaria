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
    <form method="post" action="/produto">
    {{ csrf_field() }}
        <input type="text" placeholder= "Nome "name="txNome" />
        <input type="text" placeholder= "Email"name="txDesc" />
        <input type="text" placeholder= "Assunto" name="txValor" />
        <input type="text" placeholder= "Mensagem" name="txData" />

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
            @foreach($produto as $p)

            <tr>
                <td>{{$p->nome}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->data}}</td>
            </tr>

            <!-- <tr> <th>Nome</th> <th>Email</th> <td>{{$c->nome}}</td>
            <td>{{$c->email}}</td> <td>{{$c->assunto}}</td> </tr> -->
            @endforeach

        </table>
    </body>
</html>