<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            text-align:center;
            position: center;
            top: 40px; 
        }
        /* Styles for larger screens (e.g., desktops) */
    @media (min-width: 768px) {
        /* PC Size */
                body {
                    background-color: #f0f0f0;
                }
                h1 {
                    font-size: 36px;
                }
                input{
                        font-size: 20px;
                    }
            }

/* Styles for smaller screens (e.g., mobile devices) */
    @media (max-width: 768px) {
        /* Mobile Size */
                    body {
                        background-color: #fff;
                    }
                    h1 {
                        font-size: 24px;
                    }
                    input{
                        font-size: 15px;
                    }
                }

    </style>
</head>
<body> <center> <br> <br><br><br><br> <br><br><br>
     <h1>We Sent Verification code in email!</h1> 
    <form action="passcode.php" method="POST">
    <input type="number" name="cod"> <br> <br>
    <input type="submit" name="submit" value="Enter">
</form>
    </center>
</body>
<?php 
                if($_SERVER["REQUEST_METHOD"] =="POST")
                {
                            $verif = $_POST['cod'];
                            session_start();
                            $code = $_SESSION['code'];
                            echo "Code $verif <br>";
                            echo "The Email code is: $code";
                             if($verif===$code)
                             {
                                header('location: home.php');
                             }
                             else
                             {
                                echo 'the code is invalid';
                             } 
                             
                            }
                             ?>
</html> 
                