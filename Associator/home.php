<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
        <?php
             include 'header_associator_home.php';
        ?>
<body>
<center>
    <style>
            .glyphicon-home{ height:100px; width:155px; font-size:120px;}
            .glyphicon-pencil{height:100px; width:155px; font-size:120px;}       
            .glyphicon-plus-sign{height:100px; width:155px; font-size:120px;}
        </style>
        <a href="home.php" class="btn btn-outline-success btn-lg " style="margin-right:100px">
          <span  class="glyphicon glyphicon-home "></span> <br> Home
        </a>
       <span>
         <a href="Operator_Register.php" class="btn btn-outline-primary btn-lg" style="margin-right:100px">
          <span class="glyphicon glyphicon-pencil"></span> <br>Register Member
        </a>
       </span>
       <span>
         <a href="Association_Register.php" class="btn btn-outline-success btn-lg">
          <span class="glyphicon glyphicon-plus-sign"></span> <br>View Members Data
        </a>
       </span>

       </center>
        
</body>
</html>


