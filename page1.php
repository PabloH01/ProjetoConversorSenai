<!DOCTYPE html>
<meta charset="utf-8"> 
<html>
    <head>
        <head lang="pt-br">
        <title>Welcome!</title>
    </head>
    <body>
    <script type="text/javascript"></script>
    <section>
        <p>Bem vindo!</p>
        <p>Primeiramente selecione a grandeza qual você quer converter:</p>
        <div>
            <!--Div para escolher grand-->
            <button onclick="window.location.href='../ProjetoConversorSenai/calcularTensao.php'">Tensão (Volts - V)</button>
            <button onclick="window.location.href='../ProjetoConversorSenai/calcularResistencia.php'">Resistência (Ohms - R)</button>
            <button onclick="window.location.href='../ProjetoConversorSenai/calcularPotencia.php'">Potencia (Watts - P)</button>
            <button onclick="window.location.href='../ProjetoConversorSenai/calcularCorrente.php'">Corrente (Amperes - A)</button>
        </div>
    </section>
    </body>
</html>
<!-- Utilização dos recursos -->
<?php
    function calcularTensao()
    {
        echo "<label>Digite o primeiro valor:</label>";
    }
?>

