<?php 
include_once("config.php");
$result=mysqli_query($mysqli,"SELECT * FROM student ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Managenment</title>
</head>
<body>
    <a href="create.php">
        Add new student
    </a>
<table width="70%" border="1">
    <tr>
        <th>Name:</th>
        <th>Mobile:</th>
        <th>Email:</th>
        <th>Update</th>
    </tr>
    
    
    <?php
    while($student_data=mysqli_fetch_array($result)){
        echo"<tr>";
        echo"<td>".$student_data['name']. "</td>";
        echo "<td>" . $student_data['mobile'] . "</td>";
        echo "<td>" . $student_data['email'] . "</td>";
        echo "<td><a href='update.php?id=$student_data[id]'>Edit</a> |
        <a href='delete.php?id=$student_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>    


</body>
</html>