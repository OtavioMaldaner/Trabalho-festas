<?php
require_once __DIR__."/vendor/autoload.php";
$festas = Festa::festasRealizadas();
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
            <td>Nome</td>
            <td>Endereço</td>
            <td>Cidade</td>
            <td>Data</td>
        </tr>
        <?php
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
    <a href="index.php">Voltar para a tela inicial</a>
    </body>
</html>