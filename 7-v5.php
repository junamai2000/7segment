<?php
$a=array(0,1005,1005,1005,0);
$b=array(881,0,0,0,927);
$c=array(0,892,892,892,0);
$d=array(325,0,0,0,1019);
$e=array(0,365,365,365,0);
$s=array($a,$b,$b,$b,$c,$d,$d,$d,$e);
while(is_numeric($c=fgetc(STDIN)))
{
	$i=0;
	foreach($s as $j)
	{
		foreach($j as $k)
		{
			if($k&(1<<$c)) echo "#";
			else echo " ";
		}
		echo "\n";
	}
}
