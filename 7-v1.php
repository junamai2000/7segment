<?php
$seven=array(
	0,1,1,1,0,
	6,0,0,0,2,
	6,0,0,0,2,
	6,0,0,0,2,
	0,7,7,7,0,
	5,0,0,0,3,
	5,0,0,0,3,
	5,0,0,0,3,
	0,4,4,4,0,
);
$number=array(
	       //g,f,e,d,dp,c,b,a
	0=>array(0,6,5,4,0,3,2,1),
	1=>array(0,0,0,0,0,3,2,0),
	2=>array(7,0,5,4,0,0,2,1),
	3=>array(7,0,0,4,0,3,2,1),
	4=>array(7,6,0,0,0,3,2,0),
	5=>array(7,6,0,4,0,3,0,1),
	6=>array(7,6,5,4,0,3,0,1),
	7=>array(0,0,0,0,0,3,2,1),
	8=>array(7,6,5,4,0,3,2,1),
	9=>array(7,6,0,0,0,3,2,1),
);
while(false!==($c=fgetc(STDIN)) && isset($number[$c]))
{
	$i=0;
	foreach($seven as $j)
	{
		$i++;
		if($j==0) echo " ";
		else if(in_array($j,$number[$c])) echo "#";
		else echo " ";
		if($i%5==0) echo "\n";
	}

}

