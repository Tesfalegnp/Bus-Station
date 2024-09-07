
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         @media (min-width: 768px) {
        /* PC Size */

       #ll{
        text-decoration: none;
        text-align: center;
        font-size: 30px;
        padding: 0%;
        margin: 1%;
        background-color: white;
        
    }
    #ll.active{
        background-color: black;
        color:white
    }
    
    #ll:hover {
    background-color: lightgrey;
    
    }#log:hover {
    background-color: lightgrey;
    
    }
    .an{
        background-color: white;
        height: 100px;
        width: 100%;
    }
    .an img{
        background-color: black;
        height: 100px;
        width: 100px;
    }
    #log{
            text-transform: capitalize;
            object-position: right;
            float: right;
            text-decoration: none;
            text-align: center;
            font-size: 30px;
            padding: 0%;
            margin: 1%;
            background-color: white;
        }
    
                 
                }
@media (max-width: 768px) {
        /* Mobile Size */
                    
         body{
        
            background-size: 100% 100%;
         }
         .an{
            height: 20px;
            width: 100%;
         }
         .an img{
            height: 50px;
            width: 50px;

         }
         table{
            width: 100%;
            height: 20px;
            background:white;
            
         }
         #ll{
        text-decoration: none;
        text-align: center;
        font-size: 10px;
        padding: 0%;
        margin: 1%;
        background-color: white;
                } 

                #log{
            text-transform: capitalize;
            object-position: right;
            float: right;
            text-decoration: none;
            text-align: center;
            font-size: 10px;
            padding: 0%;
            margin: 1%;
            background-color: white;
        }
            }
    
    </style>
</head>
</html>
<?php
      //   echo '<table> <tr> <img src="..//Web Project//Image//main_logo.jpg" alt="Logo Image" style="height:80px;width:100%"><td> </td></tr></table>';
         echo ' 
            <table  class="an" id=""myHeader>
            <tr>
            <td><img src="..//WEB PROJECT//Image//logo.jpg" alt="Logo Image" > </td>
            <td> 
            <a id="ll" href="index.php">Home</a>
            <a id="ll" href="..//Web Project//Passenger//passenger.php" class="header">Passenger</a>
            <a id="ll" href="contact_us.php" class="header">Contact Us</a>
            <a id="ll" href="about_us.php">About Us</a>
            <a id="ll" href="#">Help</a>
            <a id="log" href="Login.php">Log In</a></td>
            </tr>
            </table> ';?>
            