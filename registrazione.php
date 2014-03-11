<html>
<body>

<?php

$host="localhost:8889";
$user="root";
$password="root";
$server=mysql_connect($host, $user, $password) or die("no server");
$db="sociale";
mysql_select_db($db, $server) or die("no server");

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['display_name'])){

	$us = $_POST['username'];
	$ps = $_POST['password'];
	$dn = $_POST['display_name'];
	$query = "INSERT INTO utenti VALUES(NULL,'$us','$ps','$dn');";
	$dbresult = mysql_query($query);
	if (!$dbresult) print "Errore inserimento ".mysql_error();	
	else print "Registrazione effettuata!!";	
}

else{
?>

<form name="form_registrazione" method="post" action="">
		<ul>
		<li><label> Username: </label>
		<input id="username" name="username" type="text" value=""></li>
		<li><label> Password: </label>
		<input id="password" name="password" type="password" value=""></li>
		<li><label> DisplayName: </label> 
		<input id="display_name" name="display_name" type="text" value=""></li>
		</ul>
		<input name="invia" type="submit" value="Invia"> 		
		</form>

<?php
}

mysql_close($server);
?>
</body>
</html>