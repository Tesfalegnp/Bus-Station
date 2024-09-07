  <?php 
  include('Config1.php');
  // The plain text password to be hashed 
  $sql = "SELECT id, password, firstname FROM operator WHERE username = '$u_name'";
  $result = mysqli_query($db, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $hashes_pass = '__';
  $count = mysqli_num_rows($result);
  $verify = password_verify($u_pass, $hashes_pass);
  // Plaintext password entered by the user 
  $plaintext_password = "11"; 
  
  // The hashed password retrieved from database 
  $hash = password_hash($plaintext_password,  
          PASSWORD_DEFAULT);  
  echo $hash;
  // Verify the hash against the password entered 
  $verify = password_verify($plaintext_password, $hash); 
  
  // Print the result depending if they match 
  if ($verify) { 
      echo 'Password Verified!'; 
  } else { 
      echo 'Incorrect Password!'; 
  } 
?> 