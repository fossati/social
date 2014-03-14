<html>
<body>

<?php

$host="localhost:8889";
$user="root";
$password="root";
$server=mysql_connect($host, $user, $password) or die("no server");
$db="sociale";
mysql_select_db($db, $server) or die("no server");
		








$a=time();
$b=date('d M y - H:i:s', $a);
echo$b;
?>



</body>
</html>