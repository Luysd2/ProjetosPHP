<?php
session_start();

    require_once("ViaCep.php");
    //todo essas funções comentadas funcionam,  mas eu decidi fazer de outra forma para 
    //ficar mais "completo"

    // $x = $_POST['cep'] ?? "";
    // $dados = ViaCep::consultarCEP($x);
    // //print_r($dados);
    // foreach($dados as $value){
    //     //echo "$value <br>";
    //     echo "<ul>
    //         <li>$value</li>
    //         </ul>";
    // }  
    
    $x = $_POST['cep'];
    if(!empty($x)){
        //$x = $_POST['cep'];
        $dados = ViaCep::consultarCEP($x);
        echo "<h3>Resultado da pesquisa do CEP ".$x." </h3>";
        echo "OBS: alguns campos podem ficar vazios por conta que no site não tem
             informações sobre elas";
             echo "<br><br><br><br>";
             
            foreach($dados as $key => $value){
                //forreach para mostra a chave e os valoress
                echo "<ul>
                        <li>$key = $value</li>
                    </ul>";
            }
        // foreach($dados as $value){
            //foreach que mostra apenas os valores (esta funcionando)
        //     //echo "$value <br>";
        //     echo "<ul>
        //             <li>$value</li>
        //         </ul>";
        // }
    }else{
        $_SESSION['erro'] = "";
        //echo "Campo vazio <br> <br>";
        header("Location: index.php");
        
    }
?>
<a href="index.php"> Voltar </a>