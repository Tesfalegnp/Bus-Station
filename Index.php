<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transprotation</title>
<!-- <link rel="stylesheet" href="..//CSS//index.css"> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
        
    <style>
       @media (min-width: 768px) {
        /* PC Size */
        .toyeta{
          width: 100px;
          height: 150px;
        }
        .more_table img{
            width: 300px;
            height:200px;
            padding:30px;
          }.site_table img{
            width: 200px;
            height:200px;
            padding:30px;
          }
          * {
            
        box-sizing: border-box;
        }
        body {
        margin: 0;
        font-family: Arial;
        font-size: 17px;
        }
        #myVideo {
        min-width: 100%; 
        min-height: 100%;
        }

        #myBtn { 
        width: 100%;
        font-size: 18px;
        padding: 10px;
        border: none;
        background: #000;
        color: #fff;
        cursor: pointer;
        }

        #myBtn:hover {
        background: #ddd;
        color: black;
        }

        .overlay {
        position:absolute;
        top:40%;
        left:10%;
        z-index:1;

        }
        h1{

        color: black;
        font-size:75px;
          }
          .home_video{
            width: 10%; 
            height: 10%;
          }
          .azu{
          color: black;
          font-size:60px;
            }
            .inp{
          color: black;
          font-size:20px;
            }
            .glyphicon{
              font-size:23px;
            }
        } 
        @media (max-width: 768px) {
        /* Mobile Size */
        .inp label{
              color:white;
            }
        .glyphicon{
              font-size:15px;
              color:black;
            }
        .azu{
          color: black;
          font-size:20px;
            }
         .inp{
          color: black;
          font-size:10px;
            }
            
        .overlay {
        position:absolute;
        top:10%;
        left:10%;
        z-index:1;
        }
        #myVideo {
        width: 100%; 
        height: 100%;
        } 
        .home_video{
            width: 100%; 
            height: 100%;
          } 
          .more_table{
            background-color:white;
            
            /* width: 50%; */
          } 
          .site_table td{
            width: 30px;
          }
          .more_table img{
            width: 30px;
            height:30px;
          }.site_table img{
            width: 20px;
            height:30px;
          }
           } 


</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body style="background-color:greylight;"> 
       <?php
           include 'header.php'; 
           include 'config.php';
           include 'create.php';
         ?>     
  <video autoplay muted loop id="myVideo" class="home_video">
  <source src="..//WEB PROJECT//Video//video2.mp4" type="video/mp4">
  
</video>
      
<div class="overlay">
        <form action="..//Web Project//Passenger//Available_bus.php" method="POST">
       <center > <b><p class="azu"> Welcome!!</p> <h3>Dear Passenger! You want to travel now,<br> Choose Your Destination with Date!</h3> </center></b> 
       <br><br><b class="inp"> <label> Departure(መነሻ) </label><input type="text" id="dept" placeholder="From Tepi(ከቴፒ)" disabled> 
       <label class="glyphicon glyphicon-arrow-right"></label> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="select" id="select" Multipled="3" required>
        <option value="destination">መዳረሻ</option >
        <option value="mizan">ሚዛን</option>
        <option value="meti">ሜጢ</option>
        <option value="shosha">ሾሻ</option>
        <option value="fide">ፊዴ</option>
        <option value="oda">ኦዳ</option>
        <option value="gecha">ጌጫ</option>
        <option value="gecha masha">ጌጫ ማሻ</option>
        <option value="masha degel">ማሻ ደገሌ</option>
        <option value="masha iwo">ማሻ እዎ</option>
        <option value="alamo">አላሞ</option>
        <option value="kubito">ኩቢጦ</option>
        <option value="michi">ምቺ</option>
        <option value="masha">ማሻ</option>
        <option value="gesha">ጌሻ</option>
        <option value="kura">ኩራ</option>
        <option value="zinki">ዝንኪ</option>
        <option value="A/Alem">አ/ዓለም</option>
        <option value="bechi">በጪ</option>
        <option value="hura">ኩራ</option>
      </select>
       <input type="text" id="dest" name="dest" placeholder="To/Destination" required> <button id="convertBtn">Speak</button><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      When: <input type="date" name="date" placeholder="DD/MM/YY" required>&nbsp;&nbsp;&nbsp;
       <input type="submit" name="search" Value="Search" class="fa fa-search" >
       </b>
       <!-- <button class="fa fa-search" style="font-size:20px;background:green;"></button> -->
             </form>
            </div> 
            <p class="error-para"></p>
            <!-- Video Speed Manage Code -->
                <script>
            var x = document.getElementById("myVideo");
            setPlaySpeed();           
            function setPlaySpeed() { 
              x.defaultPlaybackRate = 0.4;
              x.load();
            } 


          const selectElement = document.getElementById('select');
          const inputElement = document.getElementById('dest');

          selectElement.addEventListener('change', () => {
            inputElement.value = selectElement.value;
          });


            var sel=document.getElementById("select").value;
            document.getElementById("dest").textContent = sel;
    
            </script>
             <center><h1>For More</h1></center>
  <table class="more_table"><tr><td>
    <h3>About Toyota car with it's current Price</h3>
  <video autoplay muted loop class="toyeta" id="myVideo">
  <source src="..//Web Project//Video//toyota.mp4" type="video/mp4">
</video>
      <center><a href="https://www.mekina.net/cars/search?brand=toyota">Applay</a></center>
  </td> <td>
  &nbsp&nbsp <h3>Nissan cars in Ethiopia with it's price</h3>
  <img src="..//WEB PROJECT//Image//nisssa1.png" alt="" > <br>
  <center><a href="https://www.mekina.net/cars/search?brand=nissan">Applay</a></center>
  </td> <td>
    <h3>Isuzu Executive Bus in Ethiopia</h3>
  <img src="..//WEB PROJECT//Image//slide.1.jpg" alt="" > <br>
  <a href="https://jiji.com.et/keffa/buses/isuzu-executive-bus-2004-white-fEj8u0cVltGfAyNe5GLCBzSf.html?page=3&pos=13&cur_pos=13&ads_per_page=16&ads_count=361&lid=WXCjQjIOwEaqHQ3d&indexPosition=49">Applay</a>
  </td> <td>
    <center><h3>Trucks & Trailers in Ethiopia</h3></center>
  <img src="https://pictures-ethiopia.jijistatic.com/4161821_MzAwLTIzNi01MjIyMzA1MGFi.webp" alt="Trucker" > <br>
  <a href="https://jiji.com.et/trucks-commercial-agricultiral">Applay</a>
  </td>
</tr></table>
     <center>
      <h1>For Related WebSite</h1>
            <table class="site_table">
              <tr ><td >
                <a href="https://www.guzo.et/carrier/Q2Fycmllck5vZGU6Mw%3D%3D/Abay%20Bus">
                  <img src="https://guzo.s3.amazonaws.com/carrier_Q2Fycmllck5vZGU6Mw_logo_175107" alt="Abay Bus" ></a>
                  <h3>Abay Bus</h3>
              </td><td > 
              <a href="https://www.guzo.et/carrier/Q2Fycmllck5vZGU6MTE%3D/Odaa%20Bus">
                <img src="https://guzo.s3.amazonaws.com/carrier_Q2Fycmllck5vZGU6MTE_logo_84608" alt="Odaa Bus" ></a>
                <h3>Odaa Bus</h3>
              </td>
              <td >
                <a href="https://www.guzo.et/carrier/Q2Fycmllck5vZGU6Ng%3D%3D/Habesha%20Bus">  
                  <img src="https://guzo.s3.amazonaws.com/carrier_Q2Fycmllck5vZGU6Ng_logo_964531" alt="Habesha Bus" >
                </a> <h3>Habesha Bus</h3>

              </td>
            </tr>
            </table>


      <a href=""></a>
      <a href=""></a>
      <a href=""></a>
     </center> 
</body>
<?php
  include 'Footer.php';
?>
          
          
          <!-- Add Speak Sound -->
<script>
  const text = document.getElementById("dest");
  const convertBtn = document.getElementById("convertBtn");

convertBtn.addEventListener('click', function () {
    const speechSynth = window.speechSynthesis;
    const enteredText = text.value;
    const error = document.querySelector('.error-para');

    if (!speechSynth.speaking &&
        !enteredText.trim().length) {
        error.textContent = ``
    }
    
    if (!speechSynth.speaking && enteredText.trim().length) {
        error.textContent = "";
        const extraMessage = "Do You Want to Travel to ";
        const newUtter =
            new SpeechSynthesisUtterance(extraMessage+enteredText+"?");
        speechSynth.speak(newUtter);
        convertBtn.textContent = "Playing..."
    }
       setTimeout(() => {
        convertBtn.textContent = "Play"
    }, 1000);
});
</script>
</html>





