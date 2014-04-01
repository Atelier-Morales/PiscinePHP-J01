#!/usr/bin/php
<?
if ($argv[1])
{
	$buf = trim($argv[1], " ");
	$temp = explode(" ", $buf);
	
	foreach ($temp as $elem) 
	{
		if (end($temp) == $elem)
			echo "$elem\n";
		elseif ($elem)
			echo "$elem ";
	}
}
?>