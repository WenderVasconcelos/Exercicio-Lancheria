<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lancheria Seu Zé</title>
    </head>
    <body>
        <form action="control/lancheriaControle.php" method="post">
            <label>Digite seu CPF: </label>
            <input type="text" name="cpf" placeholder="insira seu cpf"/><br/>
            <label>Digite seu Endereço: </label>
            <input type="text" name="end" placeholder="insira seu endereço"/><br/>
            <label>Escolha seu Lanche: </label><br/>
            <input  type="radio" name="lanche" value="Xis Salada" checked="checked"/> <label>Xis Salada(R$ 12,00)</label><br/>
            <input  type="radio" name="lanche" value="Xis Bacon"/> <label>Xis Bacon (R$ 18,00)</label><br/>
            <input  type="radio" name="lanche" value="Xis Filé"/> <label>Xis Filé (R$ 22,00)</label><br/>
            <label>Bebida: </label><br/>
            <input type="radio" name="bebida" value="Água"/><label>Água (R$ 4,00)</label><br/>
            <input type="radio" name="bebida" value="Refri"/><label>Refrigerante (R$ 12,00)</label><br/>
            <input type="submit" value="OK"/>
        </form>
    </body>
</html>
