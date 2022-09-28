<?php
require_once __DIR__."/vendor/autoload.php";
$festas = Festa::findall();
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
            <a href="index.php?tipo=nome&ordem=asc">Ascendente</a>
            <a href="index.php?tipo=nome&ordem=desc">Descentente</a>
        </td>
        <td>
            Endereço
            <a href="index.php?tipo=endereco&ordem=asc">Ascendente</a>
            <a href="index.php?tipo=endereco&ordem=desc">Descentente</a>
        </td>
        <td>
            Cidade
            <a href="index.php?tipo=cidade&ordem=asc">Ascendente</a>
            <a href="index.php?tipo=cidade&ordem=desc">Descentente</a>
        </td>
        <td>
            Data
            <a href="index.php?tipo=data&ordem=asc">Ascendente</a>
            <a href="index.php?tipo=data&ordem=desc">Descentente</a>
        </td>
    </tr>
    <?php
    $tipo = 'nome';
    if (isset($_GET['tipo'])) {
        $tipo = $_GET['tipo'];
    }
    $ordem = 'asc';
    if (isset($_GET['ordem'])) {
        $ordem = $_GET['ordem'];
    }
    if ($tipo == 'nome' && $ordem == 'desc') {
        krsort($festas);
    }
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
<a href="festasRealizadas.php">Visualizar festas realizadas</a>
<br>
<a href="proximasFestas.php">Visualizar próximas festas</a>
<br>
<a href="cidadesFestas.php">Veja as festas próximas de você</a>
<br>
<a href="festasMes.php">Veja o número de festas por mês</a>
</body>
</html>






