<html>
      <head>
	  <title> Device Information </title>
  
 
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	  <meta name="description" content="DevOrk is an online application that instantly detects a device with its network information." />
      <script src="jquery-2.1.4.js"></script>
      <script src="mobile-detect.js"></script>
      <link rel="stylesheet" type="text/css" href="styles.css">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="devork.jpg">
	 
<style>



.topnav {
  overflow: hidden;
  background-color: ;

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



.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}

.body{
  background-image: url("mm.png");
  background-repeat: no-repeat;
  background-position: center;
background-size: auto auto ;
}


.button {
  background-color: ; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button5 {
  background-color: ;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: brown;
  color: white;
}


</style> </head>


<body>
    <center>
        
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="about.php">About</a>
  <a class="active" href="contact.php">Contact</a>
  
</div>

<div style="padding-left:16px">
</div> 
<br><br>
<div style="background-image: url('mm.png'); background-repeat: no-repeat;
  background-position: center;
background-size: auto; ">
<br/><br>

<?php
error_reporting(0);

Echo "<i><b><br> Device Type: ";

function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|huawei|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

if(isMobileDevice()){
    echo "Mobile <br><br/>";
}
else {
    echo "Desktop <br><br/>";
}

echo "Version: " . php_uname("v");

echo "<br><br>Release: " . php_uname("r");
echo "<br><br>";
echo "Processor Family: " . php_uname("m");

/* Browser
echo "<br><br>" . "Browser: " . $_SERVER['HTTP_USER_AGENT'];
*/

?>

  <script type="text/javascript">
  
//Operating System
document.write("<br><br>OS Platform: " +
navigator.platform);
    
//Language Set     
document.write("<br><br>Language: " + navigator.language);

//Screen Resolution
document.write("<br><br>Resolution: " + screen.height+' x '+screen.width);

//Inner Window Measure
document.write("<br><br>Inner Window: "  + window.innerHeight + " x " + window.innerWidth);

//Display Color Resolution
document.write("<br><br>Color Resolution: " + screen.pixelDepth) ;

</script>
  
   <br/><br/><br/>
<a href="net.php"><button class="button button5">Check Network</button></a>
</div>
 </body>
</html>
