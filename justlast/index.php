<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
  <?php
include("connection.php");
if(isset($_POST['submit']))
{
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $pass=$_POST['Password'];
  $count=$_POST['Country'];

  $sql="INSERT INTO done (Name , Email , Password , Country) 
  VALUES ('$name', '$email' ,'$pass','$count')";
  $final = mysqli_query($connect, $sql);
  if($final){
    header("location:login.php");
  }
}




?>
    <!-- form-start -->
    <div class="container">
        <h1 style="text-align: center;">SIGN-UP FORM:</h1>
        <form method="POST">
          <div class="row">
            <div class="col-25">
              <label for="Name">Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="Name" placeholder="Your name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="Email">Email</label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="Email" placeholder="Your email..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="Password">Password</label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="Password" placeholder="Your password..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="Country">Country</label>
            </div>
            <div class="col-75">
              <select id="country" name="Country">
                <option value="Australia">Australia</option>
                <option value="Canada">Canada</option>
                <option value="USA">USA</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="subject">Subject</label>
            </div>
            <div class="col-75">
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="submit" name="submit">
          </div>
        </form>
      </div>
</body>
</html>