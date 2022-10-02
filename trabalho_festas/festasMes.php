<?php
require_once __DIR__."/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Contagem de Festas por Mês</title>
    </head>
    <body>

    <table>
        <tr>
            <td>
                Mês
                <a href="festasMes.php?coluna=MONTHNAME(data)&tipo=ASC">Ascendente</a>
                <a href="festasMes.php?coluna=MONTHNAME(data)&tipo=DESC">Decrescente</a>
            </td>
            <td>
                Festas
                <a href="festasMes.php?coluna=COUNT(nome)&tipo=ASC">Ascendente</a>
                <a href="festasMes.php?coluna=COUNT(nome)&tipo=DESC">Decrescente</a>
            </td>
        </tr>
        <?php
        $coluna = $_GET['coluna'];
        $tipo = $_GET['tipo'];
        $festas = Festa::mesesFestas($coluna, $tipo);
        foreach($festas as $key => $festa){
            echo "<tr>";
            echo "<td>{$key}</td>";
            echo "<td>{$festa}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="index.php?coluna=padrao&tipo=padrao">Voltar para a tela inicial</a>
    </body>
</html>