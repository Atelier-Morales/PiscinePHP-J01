#!/usr/bin/php
<?

function ft_split($p1)
{
	$nb = 0;
	$temp = explode(" ", $p1);
	sort($temp);
	while ($temp[$nb] == NULL)
		$nb = $nb + 1;
	$trimmed_array = array_slice($temp, $nb);
	return $trimmed_array;
}

if ($argv[1])
{
	$buf = sort($argv);	
	foreach ($temp as $elem) 
	{
		if (end($temp) == $elem)
			echo "$elem\n";
		elseif ($elem)
			echo "$elem ";
	}
}

$nb = 1;

while ($nb != $argc)
{
	echo $argv[$nb]."\n";
	$nb = $nb + 1;
}
?>