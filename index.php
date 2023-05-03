<?php 

require_once './Models/Movie.php';
require_once './Models/Serie.php';
require_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include './Partials/nav.php' ?>

    <div class="titolo">
        <h1>Stream numero uno del burundi</h1>
    </div>

    <h2>Lista film</h2>
    
    <table class="table table-dark table-striped">
        <thead>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo Originale</th>
                <th scope="col">Regista</th>
                <th scope="col">Genere</th>
                <th scope="col">Anno di Produzione</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Vecchio</th>
        </thead>

        <tbody>
            <?php 
                foreach($movies as $index => $movie) {
            ?>
            <tr>
                <th scope="row"> <?php echo $index ?> </th>
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

    <h2>Lista Serie TV</h2>
    <table class="table table-dark table-striped">
        <thead>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo Originale</th>
                <th scope="col">Regista</th>
                <th scope="col">Genere</th>
                <th scope="col">Anno di Produzione</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Vecchio</th>
        </thead>

        <tbody>
            <?php 
                foreach($Series as $index => $Serie) {
            ?>
            <tr>
                <th scope="row"> <?php echo $index ?> </th>
                <td><?php echo $Serie->titolo ?></td>
                <td><?php echo $Serie->titoloOriginale ?></td>
                <td><?php echo $Serie->regista ?></td>
                <td><?php foreach($Serie->generi as $genere) echo $genere . '<br>'?></td>
                <td><?php echo $Serie->annoProduzione ?></td>
                <td><?php echo $Serie->descrizione ?></td>
                <td><?php echo $Serie->isOld == true ? 'si' : 'no' ?></td>
            </tr>

            <?php 
                }
            ?>
        </tbody>
    </table>

    <?php include './Partials/footer.php' ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>