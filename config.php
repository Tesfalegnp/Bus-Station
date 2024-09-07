<?php
  $servername = "localhost:3306";
  $username = "root";
  $password = "";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn)
  {
    die("Connection failed: " . mysqli_connect_error($conn));
  }
  
  
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS `Station`";
if ($conn->query($sql) === TRUE) 
{
//Create Table
$conn->close();
  }
?>



<!--   

  
//   CREATE TABLE IF NOT EXISTS `exit_checker` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `firstname` varchar(33) NOT NULL,
//     `lastname` varchar(33) NOT NULL,
//     `phonenumber` varchar(33) NOT NULL,
//     `email` varchar(45) NOT NULL,
//     `username` varchar(33) NOT NULL,
//     `password` varchar(33) NOT NULL,
//     PRIMARY KEY (`id`)
//   ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
  
//   --
//   -- Dumping data for table `exit_checker`
//   --
  
//   INSERT INTO `exit_checker` (`id`, `firstname`, `lastname`, `phonenumber`, `email`, `username`, `password`) VALUES
//   (1, 'foziya', 'hussien', '+251931956326', 'foziyahus@gmail.com', 'fozi', '1234'),
//   (2, 'Kemila', 'Ahmed', '+251902117297', 'kemila@gmail.com', 'kemil', 'kemil');
  
//   -- --------------------------------------------------------
  
//   --
//   -- Table structure for table `mini_bus`
//   --
  
//   CREATE TABLE IF NOT EXISTS `mini_bus` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `DfirstName` varchar(33) NOT NULL,
//     `Dlastname` varchar(33) NOT NULL,
//     `Dphonenumber` varchar(33) NOT NULL,
//     `tagNumber` varchar(33) NOT NULL,
//     `numberofSeats` int(11) NOT NULL,
//     PRIMARY KEY (`id`,`tagNumber`)
//   ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
  
//   --
//   -- Dumping data for table `mini_bus`
//   --
  
//   INSERT INTO `mini_bus` (`id`, `DfirstName`, `Dlastname`, `Dphonenumber`, `tagNumber`, `numberofSeats`) VALUES
//   (1, 'Keyrdin', 'Temam', '+2519452863', 'AM 03 09876', 0),
//   (2, 'Keyrdin', 'Temam', '+2519452863', 'AM 03 09876', 16),
//   (3, 'Keyrdin', 'Temam', '+2519452863', 'AM 03 09876', 16),
//   (4, 'Zeynba', 'Mussa', '+25198652452', 'AA 89123', 14);
  
//   -- --------------------------------------------------------
  
//   --
//   -- Table structure for table `operator`
//   --
  
//   
  
//   --
//   -- Dumping data for table `operator`
//   --
  
//   INSERT INTO `operator` (`id`, `firstname`, `lastname`, `phonenumber`, `email`, `org_addr`, `username`, `password`, `confirm_pass`) VALUES
//   (1, 'Ademmm', 'yesuf', '+251942852902', 'ademyesufml@gmail.com', 'kocha', 'adem', 'adem', ''),
//   (3, 'Foziya', 'Hussien', '+251931578952', 'foziyahuss@gmail.com', 'Kombolcha', 'fozi', '1234', '');
  
//   -- --------------------------------------------------------
  
//   --
//   -- Table structure for table `reservation`
//   --
  
//   CREATE TABLE IF NOT EXISTS `reservation` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `tagNum` varchar(33) NOT NULL,
//     `dName` varchar(33) NOT NULL,
//     `dPhone` varchar(33) NOT NULL,
//     `date` varchar(33) NOT NULL,
//     `status` varchar(33) NOT NULL,
//     PRIMARY KEY (`id`)
//   ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
  
//   --
//   -- Dumping data for table `reservation`
//   --
  
//   INSERT INTO `reservation` (`id`, `tagNum`, `dName`, `dPhone`, `date`, `status`) VALUES
//   (1, 'am2345', 'Mussa', '+251963254565', '2020-11-28', ''),
//   (2, 'am2345', 'Mussa', '+251963254565', '2020-11-28 11:50:58', ''),
//   (4, 'am2343', 'adem', '+251963254698', '2020-11-28 12:05:56', 'notapproved');
  
//   -- --------------------------------------------------------
  
//   --
//   -- Table structure for table `schedule`
//   --
  
//   CREATE TABLE IF NOT EXISTS `schedule` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `tagNum` varchar(33) NOT NULL,
//     `destination` varchar(33) NOT NULL,
//     `day` varchar(33) NOT NULL,
//     `startday` varchar(33) NOT NULL,
//     `endday` varchar(33) NOT NULL,
//     PRIMARY KEY (`id`)
//   ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;
  
//   --
//   -- Dumping data for table `schedule`
//   --
  
//   INSERT INTO `schedule` (`id`, `tagNum`, `destination`, `day`, `startday`, `endday`) VALUES
//   (16, 'AM 03 09876', 'null', 'Saturday,', '2020-11-23', '2020-11-26'),
//   (17, 'AM 03 09876', 'null', 'Saturday,Tuseday,', '2020-11-23', '2020-11-26'),
//   (18, 'AM 03 09876', 'null', 'Saturday,Tuseday,Monday,', '2020-11-23', '2020-11-26'),
//   (19, 'AM 03 09876', 'null', 'Saturday,Tuseday,Monday,Thursday,', '2020-11-23', '2020-11-26'),
//   (20, 'AM 03 09876', 'null', 'Sunday,', '', ''),
//   (63, 'O R 34561', 'null', 'Monday,Sunday,', '', ''),
//   (64, 'AM 03 09876', 'null', 'Wensday,Monday,Tuseday,', '2020-11-12', '2020-11-21'),
//   (65, 'AM 03 09876', 'null', 'Monday,', '2020-11-19', '2020-11-27'),
//   (66, 'AM 03 09876', 'null', 'Monday,Wensday,', '2020-11-19', '2020-11-27'),
//   (67, '', 'null', 'Monday,Tuseday,Friday,Wensday,Fri', '', ''),
//   (68, 'AM 03 09876', 'Array', 'Monday,Sunday,Thursday,', '2020-11-27', '2020-11-21'),
//   (69, 'AM 03 09876', 'Array', 'Monday,Sunday,Thursday,', '2020-11-27', '2020-11-21'),
//   (70, 'AM 03 09876', 'Array', 'Monday,Sunday,Thursday,', '2020-11-27', '2020-11-21'),
//   (71, 'AM 03 09876', 'null', 'Tuseday,Saturday,', '2020-11-18', '2020-11-14'),
//   (72, 'AM 03 09876AM 03 09876', 'null', 'Tuseday,Saturday,Tuseday,Saturday', '2020-11-18', '2020-11-14'),
//   (73, 'AM 03 09876AM 03 09876AM 03 09876', 'null', 'Tuseday,Saturday,Tuseday,Saturday', '2020-11-18', '2020-11-14'),
//   (74, 'AM 03 09876', 'null', 'Thursday,', '2020-11-25', '2020-11-13'),
//   (75, 'AM 03 09876', 'null', 'Thursday,Tuseday,', '2020-11-25', '2020-11-13'),
//   (76, 'AM 03 09876', 'null', 'Thursday,Tuseday,Sunday,', '2020-11-25', '2020-11-13'),
//   (77, 'AM 03 09876AM 03 09876', 'null', 'Thursday,Tuseday,Sunday,Thursday,', '2020-11-25', '2020-11-13'),
//   (78, 'AM 03 09876AM 03 09876', 'null', 'Thursday,Tuseday,Sunday,Thursday,', '2020-11-25', '2020-11-13'),
//   (79, 'AM 03 09876AM 03 09876', 'null', 'Thursday,Tuseday,Sunday,Thursday,', '2020-11-25', '2020-11-13'),
//   (80, 'AM 03 09876AM 03 09876AM 03 09876', 'null', 'Thursday,Tuseday,Sunday,Thursday,', '2020-11-25', '2020-11-13'),
//   (81, 'AM 03 09876AM 03 09876AM 03 09876', 'null', 'Thursday,Tuseday,Sunday,Thursday,', '2020-11-25', '2020-11-13'),
//   (82, 'AM 03 09876AM 03 09876AM 03 09876', 'null', 'Thursday,Tuseday,Sunday,Thursday,', '2020-11-25', '2020-11-13'),
//   (87, 'AM 03 09876', 'null', 'Thrsday', '', '');
  
//   -- --------------------------------------------------------
  
//   --
//   -- Table structure for table `start_end`
//   --
  
//   CREATE TABLE IF NOT EXISTS `start_end` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `start_end` varchar(33) NOT NULL,
//     PRIMARY KEY (`id`)
//   ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
  
//   --
//   -- Dumping data for table `start_end`
//   --
  
//   INSERT INTO `start_end` (`id`, `start_end`) VALUES
//   (1, 'kocha_dessie'),
//   (2, 'kocha_bati'),
//   (3, 'kocha_kemisa'),
//   (4, 'kocha_harbu');
  
//   /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
//   /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
//   /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
  -->