    <?php
    session_start();
    include('Config1.php');


   if( isset($_POST["Login"])){

    $u_type=$_POST['select'];
    $u_name=$_POST['username'];
    $u_pass=$_POST['password'];
    // $u_name=$_POST['username'];
    if($u_type==="Admin")
    {
               
           // $sql = "SELECT * FROM admin";
            $sql = "SELECT id FROM admin WHERE username = '$u_name' and password = '$u_pass'";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            // {
            //     $email = $row['email'];
            //     $email = "centerofposh@gmail.com";
            // }
            $count = mysqli_num_rows($result);
            // If result matched $myusername and $mypassword, table row must be 1 row           
            if($count == 1) {
                        $code = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
                        $email = "centerofposh@gmail.com";
                        $subject = "Tepi Twon Bus Station";
                        $body = "Hi Dear.\n  Code:$code. ";
                        $sender = "From: peterhope935@gmail.com";
                        if(mail($email, $subject, $body, $sender)){
                            session_start();
                            $_SESSION['code'] = $code;                                            
                          }
                          header('location: ..//WEB PROJECT//Admin//passcode.php');
                    }
            if ($count== 0){

             //   $sucess=false;
               echo '<script>
              alert("Sorry Admin Either UserName Or Password Is incorrect!!<br> Try Again ");
               </script>';
          
            }                  
    }
       else if($u_type==="Operator"){  
        // $sql = "SELECT * FROM admin";
                $sql = "SELECT id, password, firstname FROM operator WHERE username = '$u_name'";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                 $hashes_pass = $row['password'];
                $count = mysqli_num_rows($result);
                $verify = password_verify($u_pass, $hashes_pass);
                if($count==1 && password_verify($u_pass, $hashes_pass))
                 { 
                    echo 'Password Verified!'; 
                } 
                else { 
                    echo '<script>
                       alert("Sorry Either UserName Or Password Is incorrect!!<br> Try Again ");
                        </script>';   }




        // if(password_verify($u_pass, $hashes_pass))
        // {
        //     echo "valid";
        // }
        // else{
        //     echo "invalid";
        // }

        // if($count == 1 && password_verify($u_pass, $hashes_pass))
        // {
        //     header('Location: ../Web Project/Operator/home.php'); 
        //     exit();
        // } else 
        // {
        //     echo '<script>alert("Invalid password.");</script>';
        // }

            // $sql = "SELECT id FROM operator WHERE username = '$u_name'and password='$u_pass'";
            //  $sql = "SELECT id FROM operator WHERE username = '$u_name'";
            // $result = mysqli_query($db,$sql);
            // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            // $hashes_pass=$row['password'];
            // //$active = $row['active'];
            // $count = mysqli_num_rows($result);
             
            // // If result matched $myusername and $mypassword, table row must be 1 row          
            // if($count == 1) {  
            //     if(password_verify($u_pass,$hashes_pass))
            //     {
            //         header('location:..//Web Project//Operator//home.php');
            //     }
            //     else{
            //         redirect('Login.php','InValid Password');
            //     }
            //     //echo " <script>alert('hello oopppppp');</script> ";                
            // }
            // else{
            //     redirect('Login.php','InValid UserName');
            // }
            // if ($count== 0){

            //  //   $sucess=false;
            //    echo '<script>
            //   alert("Sorry Either UserName Or Password Is incorrect!!<br> Try Again ");
            //    </script>'; }
             } 
         else  if($u_type==="Association Manager"){
            header('location: ..//WEB PROJECT//Associator//home.php');
        echo " <script>alert('hello Association Manager');</script> ";
    } 
       else if($u_type==="Driver"){ 
        echo " <script>alert('hello Driver');</script> ";
    }
    else if ($u_type === "Distributor") {
                // Prepared statement to prevent SQL injection
                $stmt = $db->prepare("SELECT id, password, firstname FROM distributor WHERE username = ?");
                $stmt->bind_param("s", $u_name);
                $stmt->execute();
            //   $result = mysqli_query($db,$sql);
            // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $result = $stmt->get_result();
                header('location: ..//WEB PROJECT//Distribution_manager//home.php');
                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $hashes_pass = $row['password'];
                   
                    if (password_verify($u_pass, $hashes_pass)) {
                        echo 'Password Verified!';
                    } else {
                        echo '<script>
                            alert("Sorry, Either UserName Or Password Is incorrect!!<br> Try Again password in distrubutor ");
                        </script>';
                    }
                } else {
                    echo '<script>
                        alert("Sorry, Either UserName Or Password Is incorrect!!<br> Try Again usesrname  ggggggggggggg");
                    </script>';
                }
            
                $stmt->close();
            }
            
    
        else {
            echo "Out of All";
        }
}
   ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0)
}

.card{
    margin-bottom:20px;
    border:none;
}

.box {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 26%;
    left: 30%;
    background: #191919;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px
}

.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 100px;
    border-color: #2ecc71;
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}

.box input[type="submit"]:hover {
    background: #2ecc71;
}

.forgot {
    text-decoration: underline;
}

.text-muted{
    color:white;
    background-color:#191919;
}
.select{
    background-color: black;
    color: white;
}
    </style>
</head>
    <?php
    include 'header.php';
    ?>
<body>   

<div class="container"> <div class="row"> <div class="col-md-6"> <div class="card"> 
    <form action="Login.php" class="box" method="POST"> <h1>Login</h1> 
    <p class="text-muted"> Please enter your login and password!</p>
     <input type="text" name="username" id="username" placeholder="Username" required> 
     <input type="password" name="password" id ="password" placeholder="Password" required> 
     <select class="select" name="select" id="select" Multipled="3">
        <option value="Admin">Admin</option>   
        <option value="Association Manager">Association Manager</option>
        <option value="Driver">Driver</option>    
        <option value="Operator">Operator</option> 
        <option value="Distributor">Distribution Manager</option>       
    </select><br><br>
    <div><p style="color:white;" id="incorrect"></p></div>
      <!-- <button type="Submit" name ="Login" value="Login">Login</button> <br><br><br> -->
     <input type="submit" name="Login" value="Login" href="#"> <br><br><br>
     <a class="forgot text-muted" href="#">Forgot Password?</a>
      </form> </div> </div> </div>
</div>
</body>  
</html>