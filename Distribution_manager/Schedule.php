<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        #p1 {
            font-family: sans-serif; /* Choose a suitable font */
            font-size: 20px; /* Adjust the font size as needed */
            line-height: 1.5; /* Adjust the line height for spacing */
            color: red; /* Set the text color */
            text-align: center; /* Align the text to the left */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            }
        .tabl{
            border: 1px solid;
            width:65%;
            background: url("./img/b_img.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color:white;
        }
        .tabl td{
            /* border: 1px solid; */
            height:65px;
        }
        .table1{
            border: 1px solid;
            width:100%;
        }
        .table1 th{
            border: 2px solid; 
            padding:5px;
            font-size:20px;      
        }
        .table2{
            border: 1px solid;
            /* width:100%; */
        }
        .sub{
            /* background:blue;  */
            width:20%;
            height:40px;  
            background-image: url('./img/an_img.jpg');
            background-position: top left;
            animation: mymove 5s infinite;      
            }
            @keyframes mymove {
            50% {background-position: center;}
            }
        .sub:hover{
            transform:translateX(0);
            background:black;
            }
        .sub input{
            font-size:30px;
            color:blue;
        }
        .past{
            width: 50%;
            height:40px;
        }
        .past button{         
           font-size:20px;
           padding:20px; 
           margin:20px;
           border:none; 
           }
           .past button:hover{         
           font-size:21px;
           background:blue;
           }
    </style>
</head>
<body> <center>
    <center><h1 sytel="text-alignment:center;">Bus Scheduling System</h1></center>
    
    <?php
    include 'Config.php';
    ?> 
    <form action="Schedule.php" method="POST">
    <table class="tabl">
        <tr>
        <th colspan="3">
            Schedul Here!
        </th>
       
        </tr>
       <tr>           
                <td><b>Available Bus In Tag Number</b> <br> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#160;&#160;&#160;&nbsp;
                <select name="t_select" id="t_select" required>
                    <?php 
                    $sql = "SELECT tag_no FROM bus";
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
                      echo '<option value="tag">'.$tag.'</option>';
                    }
                    ?>
                </select> </td>
                <td><br> <br> <b>Select Distenation</b>  <br> <br> &nbsp;&nbsp;&nbsp;&nbsp;
                <select name="select" id="select" Multipled="3" required>
        <option value="destination">መዳረሻ</option >
        <option value="mizan/ሚዛን">ሚዛን</option>
        <option value="meti">ሜጢ</option>
        <option value="shosha">ሾሻ</option>
        <option value="fide">ፊዴ</option>
        <option value="oda">ኦዳ</option>
        <option value="gecha">ጌጫ</option>
        <option value="gecha masha">ጌጫ ማሻ</option>
        <option value="masha degel">ማሻ ደገሌ</option>
        <option value="masha iwo">ማሻ እዎ</option>
        <option value="alamo">አላሞ</option>
        <option value="kubito">ኩቢጦ</option>
        <option value="michi">ምቺ</option>
        <option value="masha">ማሻ</option>
        <option value="gesha">ጌሻ</option>
        <option value="kura">ኩራ</option>
        <option value="zinki">ዝንኪ</option>
        <option value="A/Alem">አ/ዓለም</option>
        <option value="bechi">በጪ</option>
        <option value="hura">ኩራ</option>
        </select> <br> <br>
            </td>
                <td> <b>Departure Date</b>  <br>
                <input type="date" name="date" required>
                </td>
                <td> <b> Departure Time</b> <br>
                    <input type="time" name="time" required>
                 </td>
                </tr>    
    </table> <br>
     <div class="sub"> <input type="submit" values="Enter"> 
    </div>
    </form>     <center>
                   <p id="p1"></p>
                    </center>
                    <br><br>
                    <div class="past">
                        <table><tr><td> <a href="table_past.php"><button >Past Schedule</button></a>
                            </td> <td> <a href="table_present.php"><button >Present/Future Schedule</button></a> </td></tr></table>  
                 
                        </div>
                
                    


                    <!-- //////////////////////////////////////////// -->
                    <!-- Second table start -->

         <?php
// include('Config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $tag = $_POST['t_select'];
    $dest = $_POST['select'];
    $d_date = $_POST['date'];
    $d_time = $_POST['time'];
    $currentTime = time();
    $inputTimestamp = strtotime($d_date);
    if($inputTimestamp > $currentTime){
      $sql = "INSERT INTO bus_schedule (tag_no,destination, d_date,d_time) VALUES ('$tag', '$dest', '$d_date','$d_time')";
    if(mysqli_query($db, $sql)===true) 
    {
        include('success_show.php');
    } 
    else{
        echo "Sorry not inserted!";
    }}
    else{
        ?>
        <script>
                var i = 0;
                var txt = 'Sorry The Past Date Schedule is not Possible! Please Schedule Again!';
                var speed = 50;
                typeWriter();
                function typeWriter() {
                if (i < txt.length) {
                    document.getElementById("p1").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }}
        </script>
        <?php    
    } } ?>
                    <!-- End of Database content -->


                    
</body>
</html>