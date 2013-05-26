<?php
header('Content-type: text/html; charset=utf-8');
//header('Content-type: text/html; charset=windows-1251');
?>

<html>
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ноутбук</title>

</head>
<body>
</body>
</html>
<?php
define("DBName","testbd");
define("HostName","localhost");
define("UserName","root");
define("Password","");

if(!mysql_connect(HostName,UserName,Password))
{ echo "Error connecting to database".DBName."!<br>";
echo mysql_error();
exit;
}
mysql_select_db(DBName);


$result = mysql_query("SELECT * FROM bd");

echo "<table border=2>

<th>Имя</th>
<th>Отчество</th>
<th>Фамилияна</th>
<th>Відвідування</th>
<th>Сервіс ресторану</th>
<th>Кухня ресторану</th>
<th>Побажання)</th>
<th>Ваші запитанняа)</th>
<th>Дата відвідування</th>
<th>Телефон</th>
<th>Пароль</th>
"; 

while($row = mysql_fetch_array($result))
 {
  echo "<tr>";
  echo "<td>" . $row['name1'] . "</td>";
  echo "<td>" . $row['name2'] . "</td>";
  echo "<td>" . $row['name3'] . "</td>";
  echo "<td>" . $row['frequency'] . "</td>";
  echo "<td>" . $row['service'] . "</td>";
  echo "<td>" . $row['kitchen'] . "</td>";
  echo "<td>" . $row['better_work'] . "</td>";
  echo "<td>" . $row['question'] . "</td>";
  echo "<td>" . $row['data'] . "</td>";
  echo "<td>" . $row['telephone'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
 }

echo"</table>";
//mysql_close($con);
?>
