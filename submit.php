<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vyplněná data</title>
</head>
<body>
   <h1>Vyplněná data</h1>
   <?php
   $username = filter_input (INPUT_POST, 'username');
   $password = filter_input (INPUT_POST, 'password');
   echo "Bylo vyplněno jméno $username <br>";
   echo "Vaše heslo $password <br>";

   if (($username == 'jan123456') && ($password == 'novak999')){
      echo "úspěšně jste se přihlásil"; }  
   else 
      echo "neplatné přihlašovací údaje"
   ?>
</body>
</html>