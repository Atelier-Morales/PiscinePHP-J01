#!/usr/bin/php
<?
function print_stuff($p1)
{
	foreach ($p1 as $var) 
		echo "$var\n";
}

function copy_rest($p1)
{
	foreach ($p1 as $value) 
	{
		if (!ctype_digit($value) && !ctype_alpha($value))
			$alpha[] = $value;
	}
	sort($alpha, SORT_STRING);
	return $alpha;
}

function copy_cipher($p1)
{
	foreach ($p1 as $value) 
	{
		if (ctype_digit($value))
			$alpha[] = $value;
	}
	sort($alpha, SORT_STRING);
	return $alpha;
}

function copy_alpha($p1)
{
	foreach ($p1 as $value) 
	{
		if (ctype_alpha($value))
			$alpha[] = $value;
	}
	sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);
	return $alpha;
}

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

if ($argv[1])
{
$nb = 1;
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

	$alpha = copy_alpha($elem);
	print_stuff($alpha);
	$cipher = copy_cipher($elem);
	print_stuff($cipher);
	$rest = copy_rest($elem);
	print_stuff($rest);
}
?>