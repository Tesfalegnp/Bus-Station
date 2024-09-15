<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabl{
            background:green;
            width: 98%;
            height:100%;
            padding:2px;
            margin:2px;
            border: 2px solid black;
            text-align: center;
        }.tabl3{

        }
        #tth td{
            border: 2px solid black;  
            background:black;
            font-size:70px; 
        }
        #ttbody{
            background:grey;
        }

    </style>
</head>
    <?php
    include ('header_admin.php');
    include('Config.php');
    ?>
<body>
<!-- <center> -->
    <h1>All Association Managers Data</h1>
    <table class="tabl">
        <th id="tth"> 
            <td>Roll Number</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>phone Number</td>
            <td>Email</td>
            <td>User Name</td>
            <td>Gender</td>
            <td>Update</td>
            <td>Delete</td>
        </th>
        <form action="Association_update.php" method="POST">
        <tbody id="ttbody">
            <?php
            $roll_start=1;
    $sql = "SELECT * FROM association";
    $result = $db->query($sql);
   if ($result->num_rows > 0) 
   {
      // output data of each row

      while($row = $result->fetch_assoc()) {
        ?>
        <tr class="tabl3">
            <td> </td>
            <td> <input type="text" name="<?php $row['id'];?>" value="<?php echo $roll_start; ?>" disabled> </td>
            <td><input type="text" name="firstname" value="<?php  $row['firstname']; ?>"> </td>
            <td><input type="text" name="lastname" values="<?php echo $row['lastname']?>"> </td>
            <td><input type="number" name="phonenumber" value="<?php echo $row['phonenumber']?>"></td>
            <td><input type="email" name="email" value="<?php echo $row['email']?>"></td>
            <td><input type="text" name="username" value="<?php echo $row['username']?>"></td>
            <td><input type="text" name="gander" value="<?php echo $row['gender']?>"></td>
            <td><input type="text" name="password" value="<?php echo $row['password']?>"> </td>
            </tr>
              <?php
        $roll_start=$roll_start+1;
      }
    } 
    $db->close(); 
        // </tbody>
        // </table>
    //</center>
        ?>
        <center><input type="submit" valeu="Enter"></center>          
        </form>
        </body>
</html>

