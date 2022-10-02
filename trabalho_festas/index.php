<?php
require_once __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Festas</title>
</head>
<body>

<table>
    <tr>
        <td>
            Nome
            <a href="index.php?coluna=nome&tipo=ASC">Ascendente</a>
            <a href="index.php?coluna=nome&tipo=DESC">Decrescente</a>
        </td>
        <td>
            Endereço
            <a href="index.php?coluna=endereco&tipo=ASC">Ascendente</a>
            <a href="index.php?coluna=endereco&tipo=DESC">Decrescente</a>
        </td>
        <td>
            Cidade
            <a href="index.php?coluna=cidade&tipo=ASC">Ascendente</a>
            <a href="index.php?coluna=cidade&tipo=DESC">Decrescente</a>
        </td>
        <td>
            Data
            <a href="index.php?coluna=data&tipo=ASC">Ascendente</a>
            <a href="index.php?coluna=data&tipo=DESC">Decrescente</a>
        </td>
    </tr>
    <?php
    $coluna = $_GET['coluna'];
    $tipo = $_GET['tipo'];
    $festas = Festa::findall($coluna, $tipo);
    foreach($festas as $festa){
        echo "<tr>";
        echo "<td>{$festa->getNome()}</td>";
        echo "<td>{$festa->getEndereco()}</td>";
        echo "<td>{$festa->getCidade()}</td>";
        //Formatação da data para exibir como dia, mês e ano.
        $dataFormatada = new DateTime($festa->getData());
        echo "<td>{$dataFormatada->format('d/m/Y')}</td>";
        echo "</tr>";
    }
    ?>
</table>
<a href='formCad.php'>Adicionar Festa</a>
<br>
<a href="festasRealizadas.php?coluna=padrao&tipo=padrao">Visualizar festas realizadas</a>
<br>
<a href="proximasFestas.php?coluna=padrao&tipo=padrao">Visualizar próximas festas</a>
<br>
<a href="cidadesFestas.php?coluna=padrao&tipo=padrao">Veja as festas próximas de você</a>
<br>
<a href="festasMes.php?coluna=padrao&tipo=padrao">Veja o número de festas por mês</a>
</body>
</html>






