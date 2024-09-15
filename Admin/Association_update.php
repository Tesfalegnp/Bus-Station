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

    // Prepare and execute the UPDATE statement with proper parameter binding
    $sql = $db->prepare("UPDATE association SET firstname=?, lastname=?, phonenumber=?, email=?, username=?, password=?, gender=? WHERE id=?");
    $sql->bind_param("sssssssi", $f_name, $l_name, $phone, $email, $username, $password, $gender, $id); // Replace $id with the actual ID of the record to update
    // Execute the statement 


    if ($sql->execute()) {
        header('location: ..//success_show');
    } else { 
        // Handle error (e.g., display an error message, log the error)
        echo "Error updating data: " . $sql->error;
    }

    // Close the statement
    $sql->close();
}

// Close the database connection if needed
$db->close();
?>




<!-- // Hash the password for security
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Prepare the SQL statement to prevent SQL injection
     // Bind parameters
     // $stmt->bind_param("sssssss", $f_name, $l_name, $phone, $email, $username, $hashed_password, $gender); -->