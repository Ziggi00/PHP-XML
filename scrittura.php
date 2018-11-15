<?php
$nome = array($_POST["nome1"],$_POST["nome2"],$_POST["nome3"]);
$specie = array($_POST["specie1"],$_POST["specie2"],$_POST["specie3"]);
$eta = array($_POST["anni1"],$_POST["anni2"],$_POST["anni3"]);
$Inizio = "<?xml version='1.0' encoding='UTF-8'?>".PHP_EOL; 
$AVeterinaria = "<veterinario>".PHP_EOL;
$CVeterinaria = "</veterinario>".PHP_EOL;
$Aanimale = "<animale>".PHP_EOL;
$Canimale = "</animale>".PHP_EOL;
for($x=0;$x<3;$x++)
{
	if($x == 0)
	{	
		$XML = $Inizio . $AVeterinaria;
	}
	$Nome = "<nome>" . $nome[$x] . "</nome>".PHP_EOL;
	$Specie = "<razza>" . $specie[$x] . "</razza>".PHP_EOL;
	$Eta = "<eta>" . $eta[$x] . "</eta>".PHP_EOL;
	
	$XML = $XML. $Aanimale . $Nome .$Specie . $Eta . $Canimale;
}
$XML = $XML . $CVeterinaria;
$file = file_put_contents("prova.xml",$XML);

?>
