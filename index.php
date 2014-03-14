<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


  <title>Form Login</title>
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
  <center><img src="http://i.imgur.com/ZMQC5Sx.png"></center>
<FORM method="post" action="login.php">

    <label>Username:</label>
      <input type="text" name="username" />
    <label>Password:</label>
      <input type="password" name="password"  />
      <input type="submit" value="Submit" name="submit" class="submit" />
</form> 
<FORM method="post" action="registrazione.php">

    <label>Non sei ancora registrato?<br>
           <input type="submit" value="registrati"  class="submit" />
    </label>
    
</form>
</body>
</html>