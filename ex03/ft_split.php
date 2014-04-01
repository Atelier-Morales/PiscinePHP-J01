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
?>