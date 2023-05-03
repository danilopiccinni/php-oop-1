<?php 

require_once './Models/Movie.php';

$movies[] = new Movie ('avenger', 'avenger', 'pinko', ['azione' , 'divertente'] ,'2000', 'blablalvlballbalala');
$movies[] = new Movie ('spiderman', 'spider', 'pallo', ['comico'] ,'2222', 'blalvlalalfldlalsdlasdldas');
$movies[] = new Movie ('hulk', 'hulk', 'kaio', ['drammatico' , 'azione'] ,'1950', 'blalvlalalfldlalsdlasdldasasdasdsadasdasds');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <thead>
            <th>Titolo</th>
            <th>Titolo Originale</th>
            <th>Regista</th>
            <th>Genere</th>
            <th>Anno di Produzione</th>
            <th>Descrizione</th>
            <th>Vecchio</th>
        </thead>

        <tbody>
            <?php 
                foreach($movies as $movie) {
            ?>
            <tr>
                <td><?php echo $movie->titolo ?></td>
                <td><?php echo $movie->titoloOriginale ?></td>
                <td><?php echo $movie->regista ?></td>
                <td><?php foreach($movie->generi as $genere) echo $genere . '<br>'?></td>
                <td><?php echo $movie->annoProduzione ?></td>
                <td><?php echo $movie->descrizione ?></td>
                <td><?php echo $movie->isOld == true ? 'si' : 'no' ?></td>
            </tr>

            <?php 
                }
            ?>
        </tbody>
    </table>

</body>
</html>