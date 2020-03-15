<!DOCTYPE HTML>
 <html>
 <head> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="DevOrk is an online application that instantly detects a device with its network information." />
 <link rel="icon" href="devork.jpg">
 <center>
 
 <title> Network Information </title>
 
 <style>
 

.topnav {
  overflow: hidden;
  background-color: ;

}

.topnav a {
  float: center;
  color: lime;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: pink;
  color: green;
  
}

.topnav a.active {
  background-color: pink;
  color: red;

  
}

.body{
	 background-image: url("im.jpeg");
	 background-repeat: no-repeat;
	 background-position: center;
     background-attachment: fixed;
	 background-color: lightblue;
	 background-size: auto;
	 width: 100%;
  max-width: 400px;
  height: auto;
 }
 
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: ;
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
  background-color: aqua;
  color: black;
  border: 2px solid #555555;
}

.button1:hover {
  background-color: red;
  color: white;
}

 </style>
 </head>
 
 <body background= "im.jpeg">
<center>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="about.php">About</a>
  <a class="active" href="contact.php">Contact</a>
  
</div>

 <h1> <font color="blue">Current Network </font></h1>
 
 <script>
 
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <script src="jquery-2.1.4.js"></script>
      <link rel="stylesheet" type="text/css" href="styles.css">
 </script>

 
 <?php

echo "<br/><b><i>"; 
$host = gethostname();
echo "Host: $host";

//HTTP Code
echo "<br><br/>HTTP Response Code: " . http_response_code(404);

// protocols
$portnum = getservbyname("http", "tcp");

//Port
echo "<br><br>Port number: $portnum";
$protocolnum = getprotobyname("tcp");

//Protocol
echo "<br><br>Protocol Name & Version: " . $_SERVER['SERVER_PROTOCOL'];


// remote port
echo "<br><br/>Remote PORT: " . $_SERVER['REMOTE_PORT'];

//Req. Method
echo "<br><br/>Request Method: " .$_SERVER['REQUEST_METHOD'];

// server info
echo "<br><br/>Server Name: ";
echo $_SERVER['SERVER_NAME'];

//Server Vendor
echo "<br><br/>Server Software: " . $_SERVER['SERVER_SOFTWARE'];

?>


<br> <br> <br><br>
<a href="mob.php"><button class="button button1">
Check Device</button></a>

</body>
</html>