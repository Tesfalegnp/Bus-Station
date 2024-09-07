<?php
include 'Config.php';
session_start();
$tag=$_SESSION['tag'];
$date=$_SESSION['date'];
$time=$_SESSION['dtime'];
$dest=$_SESSION['destt'];
$pay=$_SESSION['pay'];

if($_SERVER["REQUEST_METHOD"] =="POST")
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['Phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];          
}
    
    $sql = "INSERT INTO passenger (tag_no, destination, d_date, d_time, fname, lname, phone, email, gender, pay)
       VALUES ('$tag', '$dest', '$date', '$time', '$fname', '$lname', '$phone', '$email', '$gender', '" . mysqli_real_escape_string($db, $pay) . "')";
    if(mysqli_query($db, $sql)===true)
    {
        // $receiver = $email;
        $subject = "Tepi Twon Bus Station";
        $body = "Hi Dear. $fname $lname.\n 
                You Booked Car Tag number. $tag.\n
                You Trip To $dest.\n 
                Registred Phone Number $phone.\n
                The Car Departure Date $date.  Time $time.\n
                Gender .$gender \n
                But You have to Paid Aright Not! So:-\n
                Remember!!\n
                Without Payment The Car site number Not be Reserved!\n
                fullfill the payment in CBE using Gnereted number.\n
                ";
        $sender = "From: peterhope935@gmail.com";
        if(mail($email, $subject, $body, $sender)){
            ?>
            <center>
            <div id="customAlert" class="custom-alert" style="display: none;">
            <h1>You have been Successfully Registred.</h1>
            <img src="./img/done.gif" alt="Redirect Image"> <br> <br> <b>
                <p>Click Ok To Go Back</p></b>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <button onclick="my()" class="btn">Ok</button>
            </div></center>
           
           <?php
        }else{
            echo "Sorry, failed while sending mailxx!";
        }

        ?> 
            


        <script>
        // alert("You have been Successfully Registred");
        // setTimeout(function() {
        //   window.location.href = "/project/Web Project/Index.php";
        // }, 100);

                // Function to show the custom alert
  function showCustomAlert() {
    document.getElementById('customAlert').style.display = 'block';
  }
  // Show the alert when the page loads
  window.onload = showCustomAlert;
    // Redirect after a delay
    function my(){
        setTimeout(function() {
            window.location.href = "/project/Web Project/Index.php";
        }, 10);
    }
        </script>   
        <?php
        }
    else{
        echo "Sorry not inserted!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .custom-alert img{
            width: 600px;
            height: 400px;
        }
        .custom-alert p{
            color:white;}
        .btn{
            font-size:30px;
            background:url('./img/b_img2.gif');
            background-size:cover;
            background-repeat: no-repeat;
            border: 3px solid;
            color:White;
            width: 100px;
            height:50px;
        }
        body{
            background: url('./img/b_img3.gif');
            background-size:cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    
</body>
</html>