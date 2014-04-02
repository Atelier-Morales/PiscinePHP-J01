#!/usr/bin/php
<?
function multiexplode($delimiters, $string)
{    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return $launch;
}
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit();
}
else
{
	$exploded = multiexplode(array("+","-","*","%","/"), $argv[1]);
	if (count($exploded) != 2 || !ctype_digit(trim($exploded[0])) || !ctype_digit(trim($exploded[1])))
	{
		echo "Syntax Error\n";
		exit();
	}
	if (strstr($argv[1], '+'))
		print (trim($exploded[0]) + trim($exploded[1]));
	if (strstr($argv[1], '-'))
		print (trim($exploded[0]) - trim($exploded[1]));
	if (strstr($argv[1], '*'))
		print (trim($exploded[0]) * trim($exploded[1]));
	if (strstr($argv[1], '/'))
		print (trim($exploded[0]) / trim($exploded[1]));
	if (strstr($argv[1], '%'))
		print (trim($exploded[0]) % trim($exploded[1]));
}
echo "\n";
?>