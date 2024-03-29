<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
          include("connection.php");
          $now="SELECT * FROM done";

          $final=mysqli_query($connect,$now);
          ?>

<center>

<h1 style=color:brown>ADMIN PANEL:</h1>
<table border="1px">
    <tr>
        <th>id</th>
        <th>Name</th> 
        <th>Email</th> 
        <th>Password</th>
        <th>Country</th>
        <th>Edit</th>
</tr>
<tr>
    <?php
while($row=mysqli_fetch_assoc($final)){
    ?>
<td><?php echo$row['id'] ?></td>
<td><?php echo$row['Name'] ?></td>
<td><?php echo$row['Email'] ?></td>
<td><?php echo$row['Password'] ?></td>
<td><?php echo$row['Country'] ?></td>
<td><a href="del.php?id=<?php echo$row['id']; ?> " style="text-decoration:none"; color:black; style="color:black";>Delete</a></td>
</tr>
<?php
}


?>
</table>
</center>

</body>
</html>