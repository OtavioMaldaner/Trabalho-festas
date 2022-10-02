<?php
require_once __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Festas Realizadas</title>
    </head>
    <body>

    <table>
        <tr>
            <td>
                Nome
                <a href="festasRealizadas.php?coluna=nome&tipo=ASC">Ascendente</a>
                <a href="festasRealizadas.php?coluna=nome&tipo=DESC">Decrescente</a>
            </td>
            <td>
                Endereço
                <a href="festasRealizadas.php?coluna=endereco&tipo=ASC">Ascendente</a>
                <a href="festasRealizadas.php?coluna=endereco&tipo=DESC">Decrescente</a>
            </td>
            <td>
                Cidade
                <a href="festasRealizadas.php?coluna=cidade&tipo=ASC">Ascendente</a>
                <a href="festasRealizadas.php?coluna=cidade&tipo=DESC">Decrescente</a>
            </td>
            <td>
                Data
                <a href="festasRealizadas.php?coluna=data&tipo=ASC">Ascendente</a>
                <a href="festasRealizadas.php?coluna=data&tipo=DESC">Decrescente</a>
            </td>
        </tr>
        <?php
        $coluna = $_GET['coluna'];
        $tipo = $_GET['tipo'];
        $festas = Festa::festasRealizadas($coluna, $tipo);
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
    <a href="index.php?coluna=padrao&tipo=padrao">Voltar para a tela inicial</a>
    </body>
</html>