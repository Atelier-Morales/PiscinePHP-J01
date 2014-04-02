#!/usr/bin/php
<?

function ft_split($p1)
{
	$nb = 0;
	$temp = explode(" ", $p1);
	sort($temp);
	while ($temp[$nb] == NULL)
		++$nb;
	$trimmed_array = array_slice($temp, $nb);
	return $trimmed_array;
}

$nb = 0;
$count = 0;
while ($argv[$nb]) 
{
	$swap = 0;
	$split = ft_split($argv[$nb]);
	if (count($split) > 1)
	{
		while ($split[$swap])
		{
			$elem[$count] = $split[$swap];
			++$count;
			++$swap;
		}
	}
	else
		$elem[$count] = $argv[$nb];
	++$nb;
	++$count;
}

sort($elem);
foreach ($elem as $var) 
{
	if ($var == $elem[0])
		continue ;
	else
		echo "$var\n";
}
?>