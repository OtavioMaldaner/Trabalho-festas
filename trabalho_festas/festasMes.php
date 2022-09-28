<?php
require_once __DIR__."/vendor/autoload.php";
$festas = Festa::mesesFestas();
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
            <td>Mês</td>
            <td>Festas</td>
        </tr>
        <?php
        foreach($festas as $key => $festa){
            echo "<tr>";
            echo "<td>{$key}</td>";
            echo "<td>{$festa}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="index.php">Voltar para a tela inicial</a>
    </body>
</html>