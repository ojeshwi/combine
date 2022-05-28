<?php

require_once "../config.php";
//getting id from url
$id = $_GET ['id'];
//selecting data associated into this particular id
$sql = "SELECT * FROM persons WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "UPDATE persons SET First_name=?. Last_name=?, Email=?  WHERE id=?";
    if($stml = mysqli_prepare($conn, $sql)) {}
}


?>

<html>
<head>
    <title>Edit data</title>
</head>
<body>
<a href ="retrive_to.php"> home</a>
<br><br>
<form method ="post" action="">
    <input type= "text" name=""first_name" value="<?php echo $row['First_name']; ?>"<br>
    <input type= "text" name=""first_name" value="<?php echo $row['Last_name'];?>"<br>
    <input type= "email" name=""email"  value="<?php echo $row['Email'];?> "<br>
    <input type= "submit" value="update">
</form>
</body>
</html>

