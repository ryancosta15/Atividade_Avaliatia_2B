<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="phpryan1.css">
<body>
    <h1>Calculadora de idade</h1>
    <form action="phpryan1.php">
        <label for="nome">Nome:</label> 
        <input type="text">
        <br>   
        <label for="idade">Idade:</label> 
        <input type="number" id="idade" name ="idade">
        <br>
        <label for="peso">Peso:</label> 
        <input type="number" id="peso" name="peso">
        <br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura">
        <br>
        <button type="submit" value="calcular">Enviar</button> 
        <button type="reset">Limpar</button>
        <br>

        <?php
                //variaveis
            $nome = $_GET ['nome'];
            $idade =  $_GET ['idade'];
            $ano = 2022;
            $anonasc = $ano - $idade;
            $peso =  $_GET ['peso'];
            $altura =  $_GET ['altura'];
            $imc = $peso / $altura ** 2;
        ?>

    </form>
    <h2><?php echo "$nome nasceu em $anonasc"?></h2>
    <p><?php echo "no ano de $ano, $nome de $idade anos tem um IMC de $imc"?></p>
    <form action=""></form>
</body>
</html> 