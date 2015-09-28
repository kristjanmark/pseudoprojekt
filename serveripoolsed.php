<?php
$isik=array(
    'eesnimi'=>'Kristjan',
    'perenimi'=>'Mark',
    'vanus'=>21
);
$eesnimi_algab_vokaaliga = True;
echo $isik['eesnimi']." ".$isik['perenimi']." (".$isik['vanus'].")<br>";
if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga!";
}
?>