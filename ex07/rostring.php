#!/usr/bin/php
<?
if ($argv[1])
{
	$array = split(" ", $argv[1]);
	$count = 0;
	$nb = 0;
	while ($nb < count($array))
	{
		if ($array[$nb] == NULL)
			++$nb;
		else
		{
			$new[$count] = $array[$nb];
			++$nb;
			++$count;
		}
	}

	foreach ($new as $var) 
	{
		if ($var == $new[0])
			continue ;
		else
			echo "$var ";
	}
	echo "$new[0]\n";
}
?>