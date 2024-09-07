<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$db_name="Station";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if (!$conn)
{
  die("Connection failed: " .mysqli_connect_error($conn));
}
else
{
//create table for the Admin!
$sql2 = "CREATE TABLE IF NOT EXISTS `admin` (
    `id` int NOT NULL AUTO_INCREMENT,
    `username` varchar(33) NOT NULL,
    `password` varchar(255) NOT NULL,  -- Increased length for password hashing
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1;";
  if ($conn->query($sql2) === TRUE) {
    // Secure password hashing example:
    }
    else {
    die("Admin table formation failed: " . $conn->error);
  }
  
  //Table for the Operator!
  $sql3="CREATE TABLE IF NOT EXISTS `operator` (
        `id` int NOT NULL AUTO_INCREMENT,
        `firstname` varchar(33) NOT NULL,
        `lastname` varchar(33) NOT NULL,
        `phonenumber` varchar(33) NOT NULL,
        `email` varchar(45) NOT NULL,
        `username` varchar(33) NOT NULL,
        `password` varchar(33) NOT NULL,
        `gender` varchar(33) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=00001 ;";
      if ($conn->query($sql3) === TRUE) {     
        }
         else 
      {
        die("Operator table formation failed: " . $conn->error);
      }  

      //Table for the Association!
  $sql5="CREATE TABLE IF NOT EXISTS `association` (
    `id` int NOT NULL AUTO_INCREMENT,
    `firstname` varchar(33) NOT NULL,
    `lastname` varchar(33) NOT NULL,
    `phonenumber` varchar(33) NOT NULL,
    `email` varchar(45) NOT NULL,
    `username` varchar(33) NOT NULL,
    `password` varchar(33) NOT NULL,
     `gender` varchar(33) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=00001 ;";
  if ($conn->query($sql5) === TRUE) {     
    }
     else 
  {
    die("Operator table formation failed: " . $conn->error);
  }  

  //Table for the Distributor!
  $sql6="CREATE TABLE IF NOT EXISTS `distributor` (
    `id` int NOT NULL AUTO_INCREMENT,
    `firstname` varchar(33) NOT NULL,
    `lastname` varchar(33) NOT NULL,
    `phonenumber` varchar(20) NOT NULL,
    `email` varchar(45) NOT NULL,
    `username` varchar(33) NOT NULL,
    `password` varchar(33) NOT NULL,
    `gender` varchar(33) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=001 ;";
  if ($conn->query($sql6) === TRUE) {     
    }
     else 
  {
    die("Operator table formation failed: " . $conn->error);
  }  


}
   //create table for bus register! 
$sql4 ="CREATE TABLE IF NOT EXISTS `bus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(33) NOT NULL,
  `lastname` varchar(33) NOT NULL,
  `phone` varchar(33) NOT NULL,
  `d_phone` varchar(33) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(33) NOT NULL,
  `tag_no` varchar(33) NOT NULL,
  `level` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
   `gender` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0001 ;";
if ($conn->query($sql4) === TRUE) { 
      
  }
   else 
{
  die("Bus table formation failed: " . $conn->error);
}  
// <!--  end fir the bus register form -->

$sql7 ="CREATE TABLE IF NOT EXISTS `bus_schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tag_no` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `d_date` varchar(33) NOT NULL,
  `d_time` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=00001;";
if ($conn->query($sql7) === TRUE) { 
  }
   else 
{
  die("Bus table formation failed: " . $conn->error);
}  


// for past bus schedule

$sql7 ="CREATE TABLE IF NOT EXISTS `past_bus_schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tag_no` varchar(33) NOT NULL,
  `destination` varchar(33) NOT NULL,
  `d_date` varchar(33) NOT NULL,
  `d_time` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=00001;";
if ($conn->query($sql7) === TRUE) { 
  }
   else 
{
  die("Bus table formation failed: " . $conn->error);
}  


  // For the Passenger
  $sql7 ="CREATE TABLE IF NOT EXISTS `passenger` (
    `id` int NOT NULL AUTO_INCREMENT,
    `tag_no` varchar(33) NOT NULL,
    `destination` varchar(33) NOT NULL,
    `d_date` varchar(33) NOT NULL,
    `d_time` varchar(33) NOT NULL,
     `fname` varchar(33) NOT NULL,
    `lname` varchar(33) NOT NULL,
    `phone` varchar(15) NOT NULL,
    `email` varchar(30) NOT NULL,
     `gender` varchar(15) NOT NULL,
      `pay` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=00001;";
  if ($conn->query($sql7) === TRUE) { 
    }
     else 
  {
    die("Bus table formation failed: " . $conn->error);
  }  




?>




<!-- //--------------------------------------------------------
  
  //Create Table Driver 

//   $sql4 ="CREATE TABLE IF NOT EXISTS `driver`(
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `firstname` varchar(33) NOT NULL,
//     `lastname` varchar(45) NOT NULL,
//     `phonenumber` varchar(33) NOT NULL,
//     `username` varchar(33) NOT NULL,
//     `password` varchar(33) NOT NULL, 
//     `kebele` varchar(33) NOT NULL,  
//     PRIMARY KEY (`id`)   
//   ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
//   if($conn->query($sql4))  
//   {  
     
//     $sql5="INSERT INTO `driver` (`id`, `firstname`, `lastname`, `phonenumber`, `username`, `password`, `kebele`) VALUES
//         (2020, 'abeba', 'wolde', '+251916225842', 'driver1', '1234', 'Areka');";
//         $conn->query($sql5);
//   }else
//   {
//     die("failed the dirver table formation".mysqli_connect_error())
//   }
 //--------------------------------------------------------

 //  -->