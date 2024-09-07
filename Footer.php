<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   @media (min-width: 768px) {

        /* PC Size */
        .tab{
        width: 100%;
        background:black;
    }
    .tab label{
        color:white;
        float:right;
        font-size:25px;

    }
    #lnk1{
        font-size:20px;
        margin:10px;
        padding:10px;
    }
    #lnk{
        font-size:20px;
        padding:10px;
        margin:10px;
    }
    label{
        font-size:15px;
    }
    .ttd{
        width:80%;
    }
    .contac{
        text-align:center;
        position: relative;
    }
      
   }
@media (max-width: 768px) {
    /* Mobile Size */
    .tab{
        width: 100%;
        background:black;
    }
    .tab label{
        color:white;
        float:right;
        font-size:10px;
    }
    #lnk{
        font-size:10px;
        float:right;
    }
    label{
        font-size:10px;
    }
    .ttd{
        width: 30%;
    }
            }
    </style>
</head>
<body>
   <div  style="background-color:black;color:white;">
    <?php
    echo '<table class="tab"> <tr> <td class="ttd">
    <a id="lnk1" href="index.php">Home</a><br>
    <a id="lnk1" href="#">Passenger</a><br>
    <a id="lnk1" href="#">Passenger</a><br>
    <a id="lnk1" href="contact_us.php">Contact Us</a><br>
    <a id="lnk1" href="about_us.php">About Us</a><br> 
    <a id="lnk1" href="#">Help</a><br>
      </td>
       <td class="contac" style="width:20%;">
       <label> Click To Get Developer:</label> <br>
        <a id="lnk" href="#">Tesfalegn</a><br>
        <a id="lnk" href="#">Biruk</a><br>
        <a id="lnk" href="#">Edene</a><br>
        </td></tr></table><br>';
   echo ' <label> <center>&copy;2024-<script>document.write(new Date().getFullYear())</script> All Rights Are Reserved</center></label> ';
    ?>
</div> 
</body>
</html>
