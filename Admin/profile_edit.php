<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

.container {
    max-width: 400px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input[type="text"],
input[type="password"],
input[type="profile_image"],
input[type="firstname"],
input[type="lastname"],
input[type="email"],
input[type="phone"],
input[type="gender"],
input[type="address"],
input[type="profession"],

 {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
}

</style>

<?php
// Database connection
$servername = "localhost:3306";
$username = "root"; // Change as needed
$password = ""; // Change as needed
$dbname = "station";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data
$sql = "SELECT * FROM admin WHERE id=100"; // Change ID as needed
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update user data
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];   
    $profile_image = $_POST['profile_image'];
    $firstname = $_POST['firstname'];   
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];   
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender']; 
    $pro = $_POST['profession'];  

    
    $update_sql = "UPDATE admin SET username=?, password=?,profile_image=?, firstname=?,lastname=?,phone=?,email=?,address=?,profession=?,gender=? WHERE id=100"; // Change ID as needed
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssssssssss", $new_username, $new_password,$profile_image,$firstname,$lastname,$phone,$email,$address, $pro, $gender );
    
    if ($stmt->execute()) {
        echo "Record updated successfully";
        // Refresh the page to show updated data
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>User Information</h2>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" required>
            <label for="username">profile_image:</label>
            <input type="file" id="profile_image" name="profile_image" value="<?php echo htmlspecialchars($user['profile_image']); ?>" required>
            <label for="password">firstname:</label>
            <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($user['firstname']); ?>" required>
            <label for="lastname">lastname:</label>
            <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($user['lastname']); ?>" required>
            <label for="email">email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            <label for="address">address:</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($user['address']); ?>" required>
            <label for="phone">phone:</label>
            <input type="number" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>
            <label for="profession">profession:</label>
            <input type="text" id="profession" name="profession" value="<?php echo htmlspecialchars($user['profession']); ?>">
            <label for="gender">gender:</label> 
            <input type="text" id="gender" name="gender" value="<?php echo htmlspecialchars($user['gender']); ?>" >
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>
