<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
 <?php
         session_start();
   include 'header_admin.php';
 ?>

<style>
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0)
}

.box {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 0%;
    left: 30%;
    background: #191919;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px;
    margin-bottom:20px;
    border:none;
    color:white;
}

.box input[type="text"],
.box input[type="number"],
.box input[type="email"],
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
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="text"]:focus,
.box input[type="number"]:focus,
.box input[type="password"]:focus,
.box input[type="email"]:focus {
    width: 100px;
    border-color: #2ecc71
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
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
}

.text-muted{
    color:white;
}

    </style>

<body>
<div class="box">
    <form action="Operator_Register.php" method="POST">
        <h1>Register Form For Association</h1>
        <p class="text-muted">Please Enter Full Your Information!</p>
        <input type="text" name="f_name" id="f_name" placeholder="First Name" required>
        <input type="text" name="l_name" placeholder="Last Name" required>
        <input type="number" name="phone" placeholder="Phone Number" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="User_Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="c_password" placeholder="Confirm Password" required>
        Male:<input type="radio" name="gender" value="Male" checked> &nbsp&nbsp
        Female:<input type="radio" name="gender" value="Female">
        <br><br>
        <input type="submit" name="Register" value="Register"><br><br><br>
    </form>
</div>
<?php
include('Config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $hash = password_hash($password,  
          PASSWORD_DEFAULT);
    //$sql = "INSERT INTO operator (firstname, lastname, phonenumber, email, username, password, gender) VALUES ($f_name, $l_name, $phone, $email, $username, $password, $gender)";
    $sql = "INSERT INTO operator (firstname, lastname, phonenumber, email, username, password, gender) VALUES ('$hash', '$l_name', '$phone', '$email', '$username', '$hashed_password', '$gender')";
   
    //mysqli_query($db, $sql);
    //if( $db->query($sql)===true)
    if(mysqli_query($db, $sql)===true)
    {
        include('success_show.php');
    }
    else{
        echo "Sorry not inserted!";
    }}


//     
//              //  $hash = password_hash($plaintext_password, PASSWORD_DEFAULT); 
//     // Prepare the SQL statement to prevent SQL injection
//     $stmt = $db->prepare("INSERT INTO operator (firstname, lastname, phonenumber, email, username, password, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
//     // Bind parameters
//     $stmt->bind_param("sssssss", $f_name, $l_name, $phone, $email, $username, $hashed_password, $gender);

//     // Execute the statement
//     if ($stmt->execute()) {
//        // header('location: ..//success_show');
//       include('success_show.php');
//         //echo 'The Data have Successfully Entered!';
//     } else {
//         echo 'Error: ' . $stmt->error; // Output error message if any
//     }

//     // Close statement
//     $stmt->close();
// }

// // Close database connection if needed
     $db->close();
?>

</body>
</html>