<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API no PHP com file_get_contents</title>
</head>
<body>
    <?php
    //API no PHP com file_get_contents
    //pegando nomes dos personagem de star wars
    //https://www.youtube.com/watch?v=8YbIxVskm3s (link do tutorial)
    //https://swapi.dev/ (link do site api)
        $url = "https://swapi.dev/api/people/?page=2";
        $resultado = json_decode(file_get_contents($url));
        //var_dump($resultado);
        //echo json_encode($resultado);
        echo "<hr>";
        foreach ($resultado->results as $ator ) {
            echo "ATOR: " .$ator->name. "<br>";
            echo "ALTURA: " .$ator->height. " cm <br>";
            foreach ($ator->films as $filme ) {
                echo "FILMES: " .$filme. "<br>";
            }
            echo "<hr>";
        }
    ?>
</body>
</html>