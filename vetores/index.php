<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de conta bancária</title>
</head>

<body>

    <form action="conta.php" method="POST">
        Contas:
        <br />
        <select name="conta" id="">
            <option value="123.456.789-10">Luiz Lins</option>
            <option value='019.876.543-21'>Mickey</option>
            <option value='247.878.765-54'>Carlos</option>
        </select>

        <hr />
        Operação:
        <br />
        <input type="radio" value="sacar" name="operacao"> Sacar
        <input type="radio" value="depositar" name="operacao"> Depositar

        <hr />
        Valor:
        <br />
        <input type="text" name="valor">

        <hr>
        <input type="submit" value="Enviar">
    </form>



</body>

</html>