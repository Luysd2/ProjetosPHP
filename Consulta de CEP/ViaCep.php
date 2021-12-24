<?php
//use CodeIgniter\HTTP\Response; 
// o proprio vscode criou como recomendação

class ViaCep {
    public static function consultarCEP($cep){
        //print_r($cep);
        //inicia o curl
        $curl =  curl_init();

        //configuraão do curl
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //executar o curl
        $response = curl_exec($curl);

        curl_close($curl); // fecha a conexão

        //print_r($response);

        //converter json para array
        $array = json_decode($response, true);
        //se n receber o cep, ele vai retorna nulo para evitar erro
        return isset($array['cep']) ? $array : null; 
        
    }
}
?>