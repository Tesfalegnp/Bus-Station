<?php
global $date1,$tag1,$time1,$dest1,$arr;
echo "<center>";
include 'Config.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $tag_select=$_POST['t_select'];
        $time=$_POST['t_time'];
    $sql="SELECT * FROM bus_schedule WHERE tag_no= '$tag_select' and d_time= '$time'";
    $result = $db->query($sql);
if ($result->num_rows > 0) {
      // output data of each row
      $arr = [];
      while($row = $result->fetch_assoc())
       {        $tag=$row['tag_no']; 
                $d_timee=$row['d_time']; 
                $destt=$row['destination']; 
                $date=$row['d_date'];
         $arr[] = ['date' => $date,'tag'=>$tag,'dtime'=>$d_timee,'destt'=>$destt];
                          
          }   
          foreach($arr as $arr_lvl):
            $date1=$arr_lvl['date'];
            $tag1=$arr_lvl['tag'];
            $time1=$arr_lvl['dtime'];
            $dest1=$arr_lvl['destt'];
           endforeach;
    }
else{
        // $arr[] = ['date' => "No Date",'tag'=>"No Tag",'dtime'=>"No Time",'destt'=>"No Destination"];
           
                    echo '<script>
                            alert("Sorry, Tag Number and Time are not Mutch");
                        </script>';
        }
        
}       
echo "</center>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .best{
            font-size:25px;
            background:url('./img/backgroung3.jpeg');
            background-repeat:no-repeat;
            background-size:cover;
            width:50%;
            top:30px;

        }
        .best input{
            text-align:center;
            padding:5px;
            margin:5px;
            
            
        }
        body{
            background:url('./img/backgroung4.jpeg');
            background-repeat:no-repeat;
            background-size:cover;
        }
    
        #ho{
            color:white;
            font-size:25px;
            float:left;
        }
    </style>
</head>
<body> <a href="/project/Web Project/Index.php" id="ho">Home</a>

    <center> 
     <div class="best"> 
    <form action="passenger_register.php" method="POST">
        <?php  
        session_start();
        $_SESSION['date']=$date1;
        $_SESSION['tag']=$tag1;
        $_SESSION['dtime']=$time1;
        $_SESSION['destt']=$dest1;
        $_SESSION['pay']="Not Paid";
            foreach($arr as $arr_lvl):
                $date1=$arr_lvl['date'];
                $tag1=$arr_lvl['tag'];
                $time1=$arr_lvl['dtime'];
                $dest1=$arr_lvl['destt'];
            endforeach;
        ?>
    <h1> Welcome Dear Passanger!</h1>
    <h2>Fill Your Information In Blow</h2>
     <input type="text" name="fname" placeholder="First Name" required> <br><br>
     <input type="text" name="lname" placeholder="Last Name" required><br><br>
      <input type="number" name="Phone" placeholder="phone Number" required><br><br>
      <input type="email" name="email" placeholder="Email" required> <br><br>
      Gender &nbsp;&nbsp; Male:<input type="radio" name="gender" value="Male" checked> &nbsp;&nbsp;
      Female:<input type="radio" name="gender" value="Female">
      <br><br>  <input type="submit" name="submit" value="Register" id="sub">
    </form>
    </div>

    </center>
    
</body>
</html>