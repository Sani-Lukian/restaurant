
<html>
<body bgcolor="yellow">
<head>
<title> Read </title>
</head>
<body>
<?php
$fh = fopen("Names.txt", "r");
while (! feof($fh)):
//$line = fgets($fh, 4096);
//print $line."<br>";

$name1=fgets($fh,4096);
$name2=fgets($fh,4096);
$name3=fgets($fh,4096);
$where=fgets($fh,4096);
$frequency=fgets($fh,4096);
$service=fgets($fh,4096);
$kitchen=fgets($fh,4096);
$all=fgets($fh,4096);
$better_work=fgets($fh,4096);
$question=fgets($fh,4096);
$data=fgets($fh,4096);
$telephone=fgets($fh,4096);
$password=fgets($fh,4096);

endwhile;
fclose($fh);

echo "Клієнт - $name1 $name2 $name3<p>";

if($where=="web")
 echo "Про ресторан я дізнався(-лася) з інтернету<p>";
else if ($where=="advert")
 echo "Про ресторан я дізнався(-лася) з реклами по радіо чи телебаченню<p>";
else if ($where=="press")
 echo "Про ресторан я дізнався(-лася) з газети<p>";
else if ($where=="other")
 echo "Про ресторан я дізнався(-лася) з інших джерел<p>";

if ($frequency=="first") 
  echo "До ресторану я прийшов вперше<p>";
else if ($frequency=="monthly")
	echo "Ресторан відвідую щомісяця<p>";
else if ($frequency=="weekly")
	echo "Ресторан відвідую щотижня<p>";
else if ($frequency=="daily")
	echo "Ресторан відвідую щодня<p>";

if ($service=="five")
	echo "Сервіс ресторану я оцінюю в 5 балів<p>";
if ($service=="four")
	echo "Сервіс ресторану я оцінюю в 4 бали<p>";
if ($service=="three")
	echo "Сервіс ресторану я оцінюю в 3 бали<p>";
if ($service=="two")
	echo "Сервіс ресторану я оцінюю в 2 бали<p>";
if ($service=="one")
	echo "Сервіс ресторану я оцінюю в 1 бал<p>";

if ($kitchen=="five")
	echo "Кухню ресторану я оцінюю в 5 балів<p>";
if ($kitchen=="four")
	echo "Кухню ресторану я оцінюю в 4 бали<p>";
if ($kitchen=="three")
	echo "Кухню ресторану я оцінюю в 3 бали<p>";
if ($kitchen=="two")
	echo "Кухню ресторану я оцінюю в 2 бали<p>";
if ($kitchen=="one")
	echo "Кухню ресторану я оцінюю в 1 бал<p>";

if ($all=="five")
	echo "Загальне враження від ресторану я оцінюю в 5 балів<p>";
if ($all=="four")
	echo "Загальне враження від ресторану я оцінюю в 4 бали<p>";
if ($all=="three")
	echo "Загальне враження від ресторану я оцінюю в 3 бали<p>";
if ($all=="two")
	echo "Загальне враження від ресторану я оцінюю в 2 бали<p>";
if ($all=="one")
	echo "Загальне враження від ресторану я оцінюю в 1 бали<p>";

if ($better_work=="upgrade")
	echo "Я б додав(-ла) страв до меню<p>";
if ($better_work=="repair")
	echo "Я б yдосконалив(-ла) сервіс<p>";
if ($better_work=="apps")
	echo "Я б додав(-ла) живу музику<p>";
if ($better_work=="tricks")
	echo "Я б удосконалив(-ла) шоу-балет<p>";
if ($better_work=="news")
	echo "Я б додоав(-ла) програму дегустації нових страв<p>";
if ($better_work=="none")
	echo "Мені подобається все в ресторані<p>";

if($question=="yes")
echo "Так, я бажаю отримувати додаткові знижки <p>";
else if ($question=="no")
echo "Ні, додаткові знижки не потрібні";

echo "Дата мого народження $data<p>";
echo "Мій телефон - $telephone <p>";
echo "мій пароль - $password";

?>
</body>
</html>
