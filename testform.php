<?php
$file = file("config.cfg");
$lines = $file;
$parr = $_POST;
// print_r($parr);
$i = 0;
// echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
foreach ($lines as $line_num => $line) {
	if(stripos($line, '=') > 0)	{
		$temp[] = explode("=", htmlspecialchars($line));
		$j[] = $line_num;
	}
}
// echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
// print_r($temp);
// echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
foreach ($parr as $key => $value) {
		$temp[$i][1] = $parr[$key];
		// echo("TEMP{$i}: {$temp[$i]}</br>\n");
		// echo("PARR{$key}: {$parr[$key]}</br>\n");
		$temp[$i] = $temp[$i][0] . "=" . $temp[$i][1];
		$i = $i + 1;
	}
// echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
// print_r($lines);
// echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
$i = 0;

foreach ($lines as $line_num => $line) {
	if(stripos($line, '=') > 0)	{
		if ($i == 0)
			$lines[$line_num] =  $temp[$i];
		else $lines[$line_num] = "\n" . $temp[$i];
		$i = $i + 1;
	}
}

$i = 0;
// echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
// print_r($lines);
// echo "</br>\n</br>\n</br>\n</br>\n</br>\n";

file_put_contents("config.cfg", $lines);
?>