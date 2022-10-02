<?php
require_once __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Cidades</title>
    </head>
    <body>

    <table>
        <tr>
            <td>
                Cidade
                <a href="cidadesFestas.php?coluna=cidade&tipo=ASC">Ascendente</a>
                <a href="cidadesFestas.php?coluna=cidade&tipo=DESC">Decrescente</a>
            </td>
            <td>
                Contagem
                <a href="cidadesFestas.php?coluna=COUNT(cidade)&tipo=ASC">Ascendente</a>
                <a href="cidadesFestas.php?coluna=COUNT(cidade)&tipo=DESC">Decrescente</a>
            </td>
        </tr>
        <?php
        $coluna = $_GET['coluna'];
        $tipo = $_GET['tipo'];
        $festas = Festa::cidadesFestas($coluna, $tipo);
        foreach($festas as $key => $festa){
            echo "<tr>";
            echo "<td>{$key}</td>";
            echo "<td>{$festa}</td>";
            //Formatação da data para exibir como dia, mês e ano.
            echo "</tr>";
        }
        ?>
    </table>
    <a href="index.php">Voltar para a tela inicial</a>
    </body>
</html>