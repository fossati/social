<html>
 <head>

  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>


 	<style type="text/css">
  * {
    margin: 0px;
    padding: 0px;outline: none;
  }

  body {
    background: url('http://i.imgur.com/LRBj8yB.jpg') repeat;
    background-size: 100% 100%; 
  }

  form {
    border: 1px solid #228B22;
    width: 250px;
    -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    background:  -moz-linear-gradient(19% 75% 90deg,#ADD8E6, #ADD8E6);
    background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#ADD8E6), to(#ADD8E6));
    margin:50px auto;
    padding: 20px;
    -moz-box-shadow:0px -5px 300px #ADD8E6;
    -webkit-box-shadow:0px -5px 300px #ADD8E6;
  }

  label {
    font-size: 12px;
    font-family: arial, sans-serif;
    list-style-type: none;
    color: #228B22;
    text-shadow: #000000 1px 1px;
    margin-bottom: 10px;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
    display: block;
  }

  input {
    -webkit-transition-property: -webkit-box-shadow, background;
    -webkit-transition-duration: 0.25s;
      padding: 6px;
    border-bottom: 0px;
    border-left: 0px;
    border-right: 0px;
    border-top: 1px solid #228B22;
    -moz-box-shadow: 0px 0px 2px #228B22;
    -webkit-box-shadow: 0px 0px 2px #228B22;
    margin-bottom: 10px;
    background: #ADD8E6;
    width: 230px;
  }

  input.submit {
    -webkit-transition-property: -webkit-box-shadow, background;
    -webkit-transition-duration: 0.25s;
    width: 100px;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#228B22), to(#228B22)); 
    background:  -moz-linear-gradient(19% 75% 90deg,#228B22, #228B22);
    color: #fff;
    text-transform: uppercase;
    text-shadow: #000 1px 1px;
    border-top: 1px solid #228B22;
    margin-top: 10px;
  }

  input.submit:hover {
    -webkit-box-shadow: 0px 0px 2px #000;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#228B22), to(#228B22));
    background:  -moz-linear-gradient(19% 75% 90deg,#228B22, #228B22);
  } 

  input.submit:active {
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#228B22), to(#228B22));
    background:  -moz-linear-gradient(19% 75% 90deg,#228B22, #228B22);
  }

  input:hover {
    -webkit-box-shadow: 0px 0px 4px #000;
    background: #228B22;
  }
  </style>
</head>
<body>
<?php

$host="localhost";
$user="root";
$password="root";
$server=mysql_connect($host, $user, $password) or die("Impossibile connettersi al database MySQL");
$db="sociale";
mysql_select_db($db, $server) or die("Impossibile connettersi al database MySQL");

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['display_name'])) {

	$us = $_POST['username'];
	$ps = $_POST['password'];
	$dn = $_POST['display_name'];

  $query = "SELECT * FROM utenti where username = '".$us."'";
  $dbresult = mysql_query($query);

  $result = mysql_query("SELECT * FROM utenti where username = '".$us."'", $server);
  if (mysql_fetch_array($dbresult) != NULL) return ;

  $query = "INSERT INTO utenti VALUES(NULL,'$us','$ps','$dn');";
  $dbresult = mysql_query($query);
  if (!$dbresult) print "Errore inserimento ".mysql_error();  
  else print "Registrazione effettuata!!";
}

?>

 <center><img src="http://i.imgur.com/ZMQC5Sx.png"></center>
<form name="form_registrazione" method="post" action="">
		<ul>
		<label> Username: </label>
		<input id="username" name="username" type="text" value="">
		<label> Password: </label>
		<input id="password" name="password" type="password" value="">
		<label> DisplayName: </label> 
		<input id="display_name" name="display_name" type="text" value="">
		</ul>
		<input id="submit" name="invia" type="submit" value="Invia"> 		
		</form>

<?php
mysql_close($server);
?>

<script>

  $( "#submit" ).click(function() {
    var username = $('#username').val();
    var pass = $('#password').val();
    var display = $('#display_name').val();
    if (username == '' || username == undefined || pass == '' || pass == undefined || display == '' || display == undefined) {
      $("#submit").prop('disabled', true);
    }
  });

  $("input").change(function() {
    $("#submit").prop('disabled', false);
  });

</script>


</body>
</html>