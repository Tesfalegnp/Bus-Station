<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "station";
include 'header_admin.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($conn->connect_error) 
{ 
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
   {
    $id=$row['id'];
    $username=$row['username'];
    $password=$row['password'];
    $img='image/'.$row['profile_image'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $email=$row['email'];
    $addr=$row['address'];
    $phone=$row['phone'];
    $pro=$row['Profession'];
    $gender=$row['gender'];
      }
}
 else
{
  echo "0 results";
}




$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
body {
  background-image: url("..//Image//profile_background2.jpg");
  height: 100%;
  width: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;  
    overflow: hidden;
    border: 1px solid black;
}
</style>
</head>
<body>
    <span></span><span></span>
<table style="width:80%">
<tr>
    <th> <div class="profile-image">
            <?php 
            if (file_exists($img)) {
                echo '<img src="' . $img . '" alt="Profile Image" />';
            } else {
                echo '<img src="path/to/default/image.jpg" alt="Default Profile Image" />';
            }
            ?>
        </div>
        <br>
    </th>

    <td><h1> <center>My profile</center> </h1></td>
  </tr>
  <tr>
    <th> <b>Setting</b></th>
    <td>Your Full Information</td>
  </tr>
  <tr>
    <th rowspan="8s">Phone</th>
    <td><?php echo 'ID:  '. $id ?></td>
  </tr>
  <tr>
    <td><?php echo 'Use Name:  '. $username ?></td>
  </tr>
  <tr>
    <td><?php echo 'PassWord:  '. $password ?></td>
  </tr><tr>
    <td><?php echo 'Email:  '. $email ?></td>
  </tr><tr>
    <td><?php echo 'Phone Number:  '. $phone ?></td>
  </tr>
  <tr>
    <td><?php echo 'Your Address:  '. $addr ?></td>
  </tr><tr>
    <td><?php echo 'Gender:  '. $gender. '  image='.$img?>
    </td>
  </tr><tr>
    <td><?php echo 'Profession:  '. $pro.'photo'.$img ?></td>
  </tr>
</table>




</body>
</html>





















<!-- ??????????????????????????????????????????????????/ -->
 <!-- ///////////////////////////// -->
 <!-- <div><form action="profile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" required>
        <input type="submit" value="Upload">
    </form></div> -->
    <!-- //////////////////////////////////////////// -->

 
<!-- /////////////////////////////////////////// -->
<!-- if($_SERVER["REQUEST_METHOD"] == "POST"){
$photo_name = $_FILES['photo']['name'];
$temp_name = $_FILES['photo']['tmp_name'];
$upload_dir = "uploads/";

move_uploaded_file($temp_name, $upload_dir. $photo_name);

// Inserting the photo URL into the database
$sql = "INSERT INTO admin (profile_image) VALUES ('$photo_name')";

if ($conn->query($sql)) {
    echo "Photo uploaded successfully!";
} else {
    echo "Error: ". $conn->error;
} -->

<!-- ///////////////////////////////////////////// -->

 <!-- ????????????????????????????????????????????? -->