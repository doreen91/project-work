<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title>
</title>  
</head>
<body>
    
    
<form method="post" action="homepage.php" enctype="multipart/form-data">
    
<input type="file" name="image" />
Name : <input type="text" name="name" />
Price :<input type="text" name="price" />
<textarea name="details" placeholder="Write details..."></textarea>
<input type="submit" name="submit" value="submit" /> 
</form>
    
<?php
    
if(isset($_POST['submit'])){
 
$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];
    
$conn = new mysqli('localhost','root','','restaurant_db');

if ($conn->connect_error) {
    
  echo "Error";  
}
    
$image = mysql_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
$imagetype = mysql_escape_string($_FILES["image"]["type"]);
$imageName = mysql_escape_string($_FILES["image"]["name"]);

    
if(substr($imagetype,0,5) == "image"){
    
    $query = "INSERT INTO food_items VALUES (' ','$imageName','$image','$name','$price','$details')";
    $check = $conn -> query($query);
    echo "Image upload successful.";
}
else{
    
    echo "Only images allowed";
}


}    
    
    
?>
    
    
    
    
    
    
</body>
</html>