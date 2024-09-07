<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* The Modal (background) */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #380202;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 20%;
  height:46.7%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
.btn{
	background:white;
    float:center;
    justify-content: center;
    width:30%;
    cursor: pointer;
    border-radius: 30px;
    outline:none;
    font-size:30px;
    border:2px;
    color:black;
    }
.btn img{
    height:20%;
    width:20%;
}
</style>
</head>

<body>
<!-- The Modal -->
<div id="myModal" class="modal">
   <?php
  // include 'header_admin.php';
 ?> 
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <h2>Your Process Have</h2>
      <!-- <span class="close">&times;</span> -->
      <img style="height:200px;width:100%; "src="./Image/suc_img.png" alt="Successfully">
      <img src="./Image/suc_text.jpg" alt="">
      <div ><button style="font-size:30px;"class="btn close"> <b>Ok</b></button> </div>
    </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
modal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
