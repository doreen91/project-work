<?php


 $conn = new mysqli('localhost','root','','restaurant_db');

if ($conn->connect_error) {
    
  echo "Error";  
}

 if(isset($_POST['first']) && !empty($_POST['first']) AND isset($_POST['last']) && !empty($_POST['last']) AND isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['tel']) && !empty($_POST['tel']) AND isset($_POST['pass']) && !empty($_POST['pass']))
 
 {
     
     $fname = mysql_escape_string($_POST['first']);
     $lname = mysql_escape_string($_POST['last']);
     $email = mysql_escape_string($_POST['email']);
     $tel = mysql_escape_string($_POST['tel']);
     $pass = mysql_escape_string($_POST['pass']);
     
    
     $hash = md5( rand(0,1000) );
     
     
$query = "INSERT INTO customer_details (Firstname, Lastname, Email, Tel, Password hash) VALUES(
'". mysql_escape_string($fname) ."', 
'". mysql_escape_string(md5($lname)) ."', 
'". mysql_escape_string($email) ."',
'". mysql_escape_string($tel) ."',
'". mysql_escape_string($pass) ."', 
'". mysql_escape_string($hash) ."')";
     
$check = $conn -> query($query);

 }
?>