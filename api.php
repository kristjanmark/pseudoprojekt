<?php

if(isset($_GET['emailValidation'])){
    $email=$_GET['emailValidation'];
    if(checkdnsrr(array_pop(explode("@", $email)),"MX")){
        exit("Emaili domeen eksisteerib");
    }else{
        exit("Emaili domeeni ei eksisteeri");
    }
}
    $filename="data.csv";
    if(file_exists($filename)) {
        $file=fopen($filename, "r");
        $andmed=[];
        while(($row=fgetcsv($file))!==false){
            $andmed[]=explode(";",$row[0]);
        }
        $json=json_encode($andmed, JSON_FORCE_OBJECT);
        echo $json;
        fclose($file);
    } else {
        echo "Faili ei leitud, luuakse data.csv fail.";
        $file=fopen($filename, "w");
        file_put_contents($filename, "Kree;Tiit;Rüütli 23\nTee;Peet;Vikerkaare 7");
        fclose($file);
    }
?>

