<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("connection Faild".$conn->connect_error);
}
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if($result->num_rows > 0){



 
?>
<table border="1px solid">
    <tr>
        <th>ID</th>
        <th>Stu_name</th>
        <th>Stu_Age</th>
    </tr>
<?php 
while($row = $result->fetch_assoc()){
     ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['Stu_name']?></td>
        <td><?php echo $row['Age']?></td>
    </tr>
</table>
<?php 
}
}
?>
    
</body>
</html>