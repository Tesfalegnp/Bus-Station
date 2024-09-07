<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table td{
            text-align:center;
            padding:10px;
             }
        table td{
            /* border:1px solid; */
        }
        table
        {
            width: 60%;
            height:350px;
            border:2px solid;
        }
        .pay{
            background: url('./img/b_pay.gif');
            background-repeat:no-repeat;
            background-size:100% 100%;
            width: 30px;
        }
        #ho{
            color:black;
            font-size:25px;
            float:left;
            text-decoration:none;
        } 
        #ho:hover{
            color:blue;
            font-size:35px
        }
        #help{
            color:black;
            font-size:25px;
            float:right;
            text-decoration:none;
        }
        #help:hover{
            color:blue;
            font-size:35px
        }
        .payy:hover{
            color:blue;
            background:grey;
        }
        .payy{
            font-size:20px;
            text-decoration:none;
        }
    </style>
</head>
<body> <a href="/project/Web Project/Index.php" id="ho">Home</a> <a href="#" id="help">Help</a>

    <Center>
        <h1>Please Enter Your Phone Number!</h1> <br>
        <form action="passenger.php" method="POST">
        <input type="number" name="phone" placeholder="e.g 0910203040" required>
        <input type="submit" value= "Enter" name="submit" id="submit">
        </form>
    <?php
    include 'Config.php';
    global $fname,$lname,$phone,$email,$gender,$d_time,$d_date,$pay,$tag_no,$destination,$count;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $phone=$_POST['phone'];
        $sql="SELECT * FROM passenger WHERE phone='$phone'";
                $result=$db->query($sql);
                if($result->num_rows>0)
                {  $count=true;
                    while($fetch=$result->fetch_assoc())
                    {
                        $fname=$fetch['fname'];
                        $lname=$fetch['lname'];
                        $phone=$fetch['phone'];
                        $email=$fetch['email'];
                        $tag_no=$fetch['tag_no'];
                        $destination=$fetch['destination'];
                        $d_date=$fetch['d_date'];
                        $d_time=$fetch['d_time'];
                        $gender=$fetch['gender'];
                        $pay=$fetch['pay'];
                    }
                        
                }else
                {
                echo '<script>
                alert("Sorry You Had Not Been Registered \nPlease Register First!");
                setTimeout(function() {
                window.location.href = "/project/Web Project/Index.php";
                }, 10);
                </script>';
            } }   ?>
                    <br>
            <table>
                <tr><td>First Name</td> <td><?php echo $fname;?></td>
                 <td>Last Name</td> <td><?php echo $lname;?></td></tr>
                <tr><td>Email</td> <td><?php echo $email; ?> </td> 
                <td>Phone Number</td> <td><?php echo $phone; ?></td></tr>
                <tr><td>Bus Destination</td> <td><?php echo $destination?></td>
                <td>Bus Tag Number</td> <td><?php echo $tag_no ?></td></tr>
                <tr><td>Departure Date</td> <td><?php echo $d_date ?></td>
                <td>Departure Time</td> <td><?php echo $d_time;?></td></tr>
                <tr><td>Gender</td> <td><?php echo $gender;?></td>
                <td>Payment</td> <td class="pay"><?php echo $pay;?></td></tr>
            </table>
            <?php
            if($count===true)
            {
                echo '<h4>Dear Passenger there is no reserve without payment</h4>
            <p>To pay click <a href="#" class="payy">Payment</a></p>';
            }
             ?>
            
    </Center>
            
</body>
</html>