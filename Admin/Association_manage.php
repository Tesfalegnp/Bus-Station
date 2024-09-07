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
    include('header_admin.php');
    include('Config.php');
    ?>
<body>
<center>
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
        <tbody id="ttbody">
            <?php
            $roll_start=1;
    $sql = "SELECT * FROM association";
    $result = $db->query($sql);
   if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        ?>
        <tr class="tabl3">
            <td><?php ?></td>
            <td><?php echo $roll_start; ?></td>
            <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['lastname']?></td>
            <td><?php echo $row['phonenumber']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['password']?></td>
            </tr>
              <?php
        $roll_start=$roll_start+1;
      }
    } 
    $db->close(); 
        // </tbody>
        // </table>
        // </center>
        ?>
        </body>
</html>

