<?php
 echo "<center>";
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
     $check=0;
    $count=1;
    //if(isset($_POST["search"]))
{
    // Retrieve form data
    $date = $_POST['date'];
    $dest = $_POST['dest'];
     $sql = "SELECT tag_no,destination,d_date,d_time FROM bus_schedule WHERE destination = '$dest' and d_date = '$date'";
             $result = $db->query($sql);
     
     if ($result->num_rows > 0) 
          {
       // output data of each row
       while($row = $result->fetch_assoc())
        {                       
                 $tag=$row['tag_no']; 
                 $d_timee=$row['d_time']; 
                 $destt=$row['destination']; 
                 $date=$row['d_date'];
              $sql2="SELECT level FROM bus WHERE tag_no='$tag'";
                $res = $db->query($sql2); 
                 while($row2 = $res->fetch_assoc())
                    {                     
                 $lev=$row2['level']; 
                 $arr_level[] = ['level'=>$lev];
                    }


        //   $timestamp = strtotime($date);
        //  // Get the day of the week
        //  $day_of_week = date('l', $timestamp);                
        //  // Store the date and day in the array
          $arr[] = ['date' => $date,'tag'=>$tag,'dtime'=>$d_timee,'destt'=>$destt];
                            
           }                        
         }
         else{
            $arr[] = ['date' =>"Empty",'tag'=>"Empty",'dtime'=>"Empty",'destt'=>"Empty"];
            $arr_level[] = ['level'=>"Empty"];
            $check=1;
         }
         echo "</center>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid;
            font-size: 25px;
        }
        table th{
            padding:15px;
            margin:10px;
            border: 1px solid;
        }
        table td{
            text-align:center;
        }
        body{
            /* background: url('./img/bus.jpg'); */
            background-repeat: no-repeat;
            background-repeat: cover;
            background-size: cover;
            background-attachment: fixed;
        }
        .empty level{
            color:red;
            font-size:30px;
         }
        .empty level{
            color:red;
            font-size:30px;
        }
        .amharic{
            color:blue;
        }
        .empty span{
            font-size:30px;
            /* border: 2px solid; */
            padding:5px;
              }
        .empty img {
                width: 100px;
                height: 150px;
                animation: fadeIn 1s infinite;
                transition: width 0.5s ease-in-out, height 0.5s ease-in-out;
                }

                @media (max-width: 768px) {
                .empty img {
                    width: 50px;
                    height: 75px;
                }
                }

                @keyframes fadeIn {
                0% { opacity: 0; }
                100% { opacity: 1; }
                }
        .book{
            font-size:30px;

        }
    </style>
</head>
<body>
    <a href="/project/Web Project/Index.php" style="font-size:30px;text-decoration:none;">Home</a>
     <center>    

                    <!-- Fill the Booking -->
                    <div class="book">
              <form action="booking.php" method="POST">
                <?php
                $b_date=$date;
                ?>
              Select tag Number With The Time: <select name="t_select" id="t_select" required>
                    <?php   
                    $sql = "SELECT tag_no FROM bus_schedule WHERE destination = '$dest' and d_date = '$date'";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc())
                       {                       
                        $tag=$row['tag_no'];
                        echo '<option value='."$tag".'>'.$tag.'</option>';
                          }}
                     else
                    {
                      $tag="No Available Bus";
                      echo '<option value='."$tag".'>'.$tag.'</option>';
                    }?>
                    </select>
              -::-<select name="t_time" id="t_time" required>
                    <?php 
                    $sql = "SELECT d_time FROM bus_schedule WHERE destination = '$dest' and d_date = '$date'";
                    $result = $db->query($sql);    
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc())
                       {                       
                        $time=$row['d_time'];
                        echo '<option value='."$time".'>'.$time.'</option>';
                          }}
                     else
                    {
                      $time="No Available Bus";
                      echo '<option value="$time">'.$time.'</option>';
                    }?>  </select>
              <input type="submit" name="tag_enter" values="Enter">
              </form>
              </div>
                    <!-- table for Display Schedule -->
        <table>
            <tr>
                <th>Roll No.</th>
                <th>Destination/ጉዞ</th>
                <th>Bus Tag Number</th>
                <th>Bus Level</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
            </tr>
            <tr>
                <td> <?php
                foreach($arr as $arry):
                    $a=$arry['destt'];
                    echo $count."<br>";
                    echo "<hr><br>";
                    $count++;
                endforeach;
                ?></td>
                 <td>
                 <?php
                foreach($arr as $arry):
                    $a=$arry['destt'];
                    echo $a."<br>";
                    echo "<hr><br>";
                endforeach;
                ?>
                </td>
                <td>
                 <?php
                foreach($arr as $arry):
                    $a=$arry['tag'];
                    echo $a."<br>";
                    echo "<hr><br>";
                endforeach;
                ?>
                </td>
                <td>
                 <?php
                foreach($arr_level as $arr_lvl):
                    $level=$arr_lvl['level'];
                    echo $level."<br>";
                    echo "<hr><br>";
                endforeach;
                ?>
                 </td>
                <td>
                 <?php
                foreach($arr as $arry):
                    $a=$arry['date'];
                    echo $a."<br>";
                    echo "<hr><br>";
                endforeach;
                ?>
                 </td>
                 <td>
                 <?php
                foreach($arr as $arry):
                    $a=$arry['dtime'];
                    echo $a."<br>";
                    echo "<hr><br>";
                endforeach;
                ?>
            </td>
            </tr>
              </table> 
              <!-- If the trip is not found -->
        <div class="empty">
             <?php
             if($check==1)
        { 
            echo '<img src="./img/sorry.png" alt="Sorry"> <br>';
            echo '<level>No Trip Found To <br> <b class="amharic"> ይቅርታ ጉዞ ወዴ </b> :-</level>';
           echo' <span class="span">';
            echo $dest;
           echo '</span>';
           echo '<level>-:<b class="amharic">አልተገኘም!</b></level>';
           echo '<br><br><level>Whene <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class="amharic"> በቀን :- </b></level>';
           echo' <span class="span">';
            echo $date;
           echo '</span>';
         }
        ?></div>
       

    </center>
</body>
</html>
