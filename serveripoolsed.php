<?php
$isik=(object) array('eesnimi'=>'Kristjan', 'perenimi'=>'Mark','vanus'=>21,'sugu'=>'Mees');
$eesnimi_algab_vokaaliga = strstr("AEIOUÕÄÖÜ",$isik->{'eesnimi'}[0]);
echo $isik->{'eesnimi'}." ".$isik->{'perenimi'}." (".$isik->{'vanus'}.") ".$isik->{'sugu'}."<br>";
if($eesnimi_algab_vokaaliga){
    echo "Nimi algab vokaaliga!";
}
?>