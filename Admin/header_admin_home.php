<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adminstretor</title>
  <style>
    table{
      background-color:black;
      color:white;
      width:93.3%;
    }
    .dv{
      background-color:white;
      color:black;
    }
    .lo{
      float: right;
    }
    .dv a{
      color:black;
      width:200px;
      font-size:20px;
    }
    
    /* ////// */
    .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:Violet;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    /* //////// */
  </style>
</head>
<body class="bg-img">
  <table><tr>
  <div class="dv">

  <td><img src="./img/logo.jpg" alt="LOGOO"style="width:100px;height:75px;"></td>
   
  <td><label style="font-size:25px; color:White; width:350px;">
  <b>From Tepi Town Bus Station <br> Welecome Adminstretor</b> </label>
  </td>
  <!-- ////////////////////////////////////// -->
   <td><div class="dropdown">
  <button class="dropbtn">Operator</button>
  <div class="dropdown-content">
  <a href="Operator_Register.php"><b>NEW REGISTER</b> </a>
  <a href="#"><b>Manage Recorded Data</b> </a>
  </div>
</div></td>
  
  <td><div class="dropdown">
  <button class="dropbtn">Distributer Manager</button>
  <div class="dropdown-content">
  <a href="distributor_Register.php"><b>NEW REGISTER</b> </a>
  <a href="#"><b>Manage Recorded Data</b> </a>
  </div>
</div></td>

  <td><div class="dropdown">
  <button class="dropbtn">Association Manager</button>
  <div class="dropdown-content">
  <a href="Association_Register.php"><b>NEW REGISTER</b> </a>
  <a href="Association_manage.php"><b>Manage Recorded Data</b> </a>
  </div>
</div></td>
  <td><div class="dropdown">
  <button class="dropbtn">Owun Profile</button>
  <div class="dropdown-content">
  <a href="#"><b>View</b> </a>
  <a href="#"><b>Edit</b> </a>
  </div>
</div></td>
<div class="dropdown   lo">
  <button class="dropbtn">Log Out</button>
  <div class="dropdown-content">
     <a href="C:\xampp\htdocs\project\Web Project\Index.php">LogOut</a>
    </div>
</div>
  <!-- ///////////////////////////////////// -->
  </div>
  </tr></table>
</body>
</html>
    
