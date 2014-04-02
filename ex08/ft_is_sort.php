<?
function ft_is_sort($p1)
{
	$new = $p1;
	sort($p1);
	return ($new == $p1);
}
?>