<?php
$filename="data.csv";
if(file_exists($filename)){
    $file=fopen($filename,"r");
    $andmed=[];
    while(($row=fgetcsv($file))!==false){
        $andmed[]=explode(";",$row[0]);
    }
    $json=json_encode($andmed, JSON_FORCE_OBJECT);
    echo $json;
    fclose($file);
}else{
    echo "Faili ei leitud. Luuakse data.csv fail!";
    $file=fopen($filename,"w");
    file_put_contents($filename,"Toomas;Test;toomas.test@email.com\nPriit;Proov;priit.proov@email.com\n");
    fclose($file);
}
?>
/**
 * Created by PhpStorm.
 * User: Kristjan
 * Date: 31.03.2016
 * Time: 18:40
 */