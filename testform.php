<?php
$file = file("config.cfg");
$lines = $file;
$parr = $_POST;
print_r($parr);
$i = 0;
// echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
foreach ($lines as $line_num => $line) {
	if(stripos($line, '=') > 0)	{
		$temp[] = explode("=", htmlspecialchars($line));
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
echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
print_r($temp);
echo "</br>\n</br>\n</br>\n</br>\n</br>\n";
$i = 0;

foreach ($lines as $line_num => $line) {
	if(stripos($line, '=') > 0)	{
		//Проблема в выводе информации в файл. Почему-то ошибка вывода
		#file_put_contents($file, ($temp[$i] . "\n"));
		$i = $i + 1;
	}
}
?>