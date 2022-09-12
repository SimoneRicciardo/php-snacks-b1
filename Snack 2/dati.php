<?php
    $nomeDaVerificare = $_GET['name'];

    if(strlen($nomeDaVerificare) < '3'){
        $responseName = "Nome NON valido";    
    } else {
        $responseName = "Nome valido";
    };

    $ageDaVerificare = $_GET['age'];

    if(is_numeric($ageDaVerificare)){
        $responseAge = "Età valida";    
    } else {
        $responseAge = "Età NON valida";
    };
    
    $emailDaVerificare = $_GET['email'];

    if(strpos($emailDaVerificare, '@') == false && strpos($emailDaVerificare, '.') == false){
        $responseEmail = "Email non valida";    
    } else {
        $responseEmail = "Email valida";
    };
        
    echo $responseName . $responseAge . $responseEmail;
?>