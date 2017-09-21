<?php
$voti=array(7,7,6,6,7,7,8,8,7);
$limite=count($voti);
$i=0;
$somma=0;
while($i<$limite)
{
	$somma+=$voti[$i];
		$i++;
}
$media=$somma/$limite;
echo"Media dei voti: ". $media;