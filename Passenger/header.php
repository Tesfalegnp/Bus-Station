
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    a{
        text-decoration: none;
        text-align: center;
        font-size: 30px;
        padding: 0%;
        margin: 1%;
        background-color: white;
        
    }
    a.active{
        background-color: black;
        color:white
    }
    
    a:hover {
    background-color: lightgrey;
    
    }
    .an{
        background-color: white;
        height: 100px;
    }
    #log{
            text-transform: capitalize;
            object-position: right;
            float: right;
        }
    </style>
</head>
</html>
<?php
      //   echo '<table> <tr> <img src="..//Web Project//Image//main_logo.jpg" alt="Logo Image" style="height:80px;width:100%"><td> </td></tr></table>';
         echo '<table  class="an" style="width:100%;">
            <tr>
            <td><img src="..//WEB PROJECT//Image//logo.jpg" alt="Logo Image" style="height:100px;width:100px"> </td>
            <td> <a href="index.php">Home</a>
            <a href="#">Passenger</a>
            <a href="contact_us.php">Contact Us</a>
            <a href="about_us.php">About Us</a>
            <a href="#">Help</a>
            <a id="log" href="Login.php">Log In</a></td>
            </tr>
            </table>';?>