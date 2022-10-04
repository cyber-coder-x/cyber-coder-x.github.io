<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<script src="https://kit.fontawesome.com/6f0be2fdf5.js"crossorigin="anonymous"></script>
</script>
<meta name="robots" content="noindex">
<meta name="title" content="Response - CYBER CODER X">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="Content-Language" content="en">
<meta name="HandheldFriendly"content="True">
<meta name="MobileOptimized"content="320">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="CYBER CODER X">
<meta name="apple-mobile-web-app-title" content="CYBER CODER X">
<meta name="theme-color" content="red">
<meta name="msapplication-navbutton-color" content="red">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="msapplication-starturl" content="/index.html">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#00a300">
<title>Response - Cyber Coder X</title>
<style>
body
{
background-color: rgba(0, 0, 0);
color: white;
text-align: center;
align-items: center;
justify-content: space-evenly;
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
font-family: 'ubuntu', sans-serif;
font-weight: bold;
}
.selector-for-some-widget
{
box-sizing: content-box;
}
.d
{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
justify-content: center;
text-align: center;
align-items: center;
}
.d .fa-spinner
{
font-size: 30px;
font-weight: bold;
animation: rotate 1s infinite;
}
@keyframes rotate
{
from
{
transform: rotate(0deg);
}
to
{
transform: rotate(360deg);
}
}
.content
{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
box-sizing: border-box;
background-color: rgba(255, 0, 102, .4);
border-top: 2px solid #22ffff;
border-bottom: 2px solid #22ffff;
}
.navbar .navbar-brand
{
margin: auto;
}
</style>
</head>
<body>
<script>
document.onreadystatechange=function()
{
if(document.readyState!=="complete")
{
document.querySelector("body").style.visibility="hidden";
document.querySelector("body").style.overflow="hidden";
document.querySelector(".fa-spinner").style.visibility ="visible";
document.querySelector(".load-text").style.visibility="visible";
}
else
{
document.querySelector("body").style.visibility="visible";
document.querySelector("body").style.overflow="scroll";
document.querySelector(".fa-spinner").style.visibility ="hidden";
document.querySelector(".load-text").style.visibility ="hidden";
}
}
</script>
<div class="d justify-content-center text-danger">
<i class="fas fa-spinner"></i>
<p class="load-text">Loading Please Wait...</p>
</div>
<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
<div class="container-fluid">
<div class="navbar-brand font-weight-bold text-warning">CYBER CODER X</div>
</div>
</nav>
<section class="content container text-center">
<p>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$comment = $_POST['comment'];
$servername = "sql108.epizy.com";
$username = "epiz_31691022";
$password = "ItY8X6YCSdf";
$dbname = "epiz_31691022_contact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error)
{
die("Connection Failed With Server. Please Try Again Later. Reason: " . $conn->connect_error);
}
$sql = "INSERT INTO contact(name, email, number, comment)VALUES('$name','$email','$number','$comment')";
if($conn->query($sql) === TRUE)
{
echo "Your Feedback Is Sent To Us Successfuly. You Will Be Contacted Within 24 Hours To Your Provided Information With Us";
}
else
{
echo "OPPS! SOMETHING WENT WRONG. PLEASE TRY AGAIN LATER. ERROR REASON: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</p>
</section>
</body>
</html>