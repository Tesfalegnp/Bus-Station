<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  background-color:grey;
}

.bg {
  /* The image used */
  background-image: url("..//Image//contact_bg1.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  font-size:30px;
    }
</style>
</head>
  <?php
      include 'header.php';
  ?>
<body>
<div class="bg">
    <center><br><br><br>
        Email: <br> <input type="email" id="eml" placeholder="123@gmail.com"><br><br><br>
        Discription: <br> <textarea name="" id="" placeholder="You can write anything in here"></textarea>
        <!-- <input type="text" id="dis" style="height: 100px; width: 300px;">  -->
          <br> <br>
        <button onclick="emaial_fun()">Submit</button>
        </center>
        <script>
          function emaial_fun()
          {
            let a=document.getElementById("eml").values
            let a=document.getElementById("dis").values
            alart("Congratulation!<br>Successfully Submitted")
          }
        </script>
</div>
</body>
  <?php
      include 'Footer.php';
  ?>
</html>
