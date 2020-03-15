
<html>
    <head> 
<title> Contact DevOrk</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="DevOrk is an online application that instantly detects a device with its network information." />
    <link rel="icon" type="image/png" href="i7.jpg" alt="DevOrk" />

<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: snow;

}

.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: green;
  
}

.topnav a.active {
  background-color: pink;
  color: red;

  
}
</style>
</head>
<center> <br/>


<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="about.php">About</a>
  <a class="active" href="contact.php">Contact</a>
  
</div>

<div style="padding-left:16px">
</div> 
</head>
<body bgcolor="azure">

<center>

<br><br><h1>
    <font face="Cantal"> Developed by: <font></h1><br>
<h3> <font face="Courier New" color="blue"><i>Farial Mahmod</i></font> <br><br><br>
<br>
<font face="Verdana">For any query or suggestion, feel free to contact: </font><br><br><br>

<div id="demo">
<img src="mail.png" alt="Color Mixer Contact" height=25 width=25 onclick="loadDoc()">
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET","a_b.txt", true);
  xhttp.send();
}
</script>
<noscript> Enable JavaScript on your browser</noscript>
<br/>
<a href="https://www.linkedin.com/in/farial-mahmod"> <img src="linkedin.png" alt="Color Mixer Linkedin" height=25 width=25></a> &nbsp &nbsp &nbsp;
<a href="https://twitter.com/farial04"><img src="twitter.png" alt="Color Mixer Twitter" height=25 width=25> </a> 

</h3>

</center>
<?php
?>