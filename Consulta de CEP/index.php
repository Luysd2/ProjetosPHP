<!-- <?php
    //link do tutorial (https://www.youtube.com/watch?v=OgE4qUyoFAo)
    //link da api(https://viacep.com.br/)
    //toda essa tag php funciona,  mas eu decidi fazer de outra forma para 
    //ficar mais "completo"
    //require_once("ViaCep.php");
    //$dados = ViaCep::consultarCEP("13848580");
    
   // print_r($dados); // imprimi todos dados do array
    //print_r($dados['uf']); // imprimi dados especifico
   
//  foreach($dados as $value){
//      echo "$value <br>";
//  }
    //die;
?> -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta de CEP</title>
</head>
<body>
    <form action="lista.php" method="POST">

        <?php
        if(isset($_SESSION['erro'])){
            echo "Campo obrigatorio para pesqusia :)";
            unset($_SESSION['erro']);
        }
        ?>

        <h3>Pesquisa de CEP</h3>
        <input type="text" name="cep" placeholder="Digite o CEP">
        <button type="submit">Pesquisar</button>
    </form>
</body>
</html>