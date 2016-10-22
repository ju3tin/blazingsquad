<!doctype html>
<html>
<head>
<meta charset="utf-8">

<style>
    
    .image2{
        
        background-color: black;
        height: 100px;
    }
banner-load{
	width:100%;
	}

.fade-in{
  -webkit-animation: fade-in 2s ease;
  -moz-animation: fade-in ease-in-out 2s both;
  -ms-animation: fade-in ease-in-out 2s both;
  -o-animation: fade-in ease-in-out 2s both;
  animation: fade-in 2s ease;
  visibility: visible;
  -webkit-backface-visibility: hidden;
}

@-webkit-keyframes fade-in{0%{opacity:0;} 100%{opacity:1;}}
@-moz-keyframes fade-in{0%{opacity:0} 100%{opacity:1}}
@-o-keyframes fade-in{0%{opacity:0} 100%{opacity:1}}
@keyframes fade-in{0%{opacity:0} 100%{opacity:1}}

</style>
<title>Untitled Document</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
 </script>
 <script>
 $(document).ready(function(){
setInterval(function(){cache_clear()},5000);
 });
 function cache_clear()
{
 window.location.reload(true);
}
</script>
</head>

<body>



 
    <!DOCTYPE html>

    
    
    <body>

<!--We appendin' on this div - ps: ids make sense here... punk-->
<div id="banner-load" align="center"></div>

<!--Don't forget Jquery-->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js'></script>

<!--New images on load -->

    
   
   
<div id="placehere" style="z-index:1000;">

</div>
 <script>var str1 = "<?php
$con=mysqli_connect("localhost","root","","transport123");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM text");



while($row = mysqli_fetch_array($result))
{
echo $row['text'];
}
;

mysqli_close($con);
?>";
var str2 = "hate blue cars";
if(str1.indexOf(str2) != -1){
	var audio = new Audio('gone.mp3');
audio.play();
  
    
     var elem = document.createElement("img");
elem.setAttribute("src", "images/PICTURE6.gif");
elem.setAttribute("height", "768");
elem.setAttribute("width", "1024");
elem.setAttribute("alt", "Flower");
document.getElementById("placehere").appendChild(elem);
    
}

    
//Add your images, we'll set the path in the next step
    var images = ['PICTURE1.png', 'PICTURE2.png', 'PICTURE3.png', 'PICTURE4.png'];
    
//Build the img, then do a bit of maths to randomize load and append to a div. Add a touch off css to fade them badboys in all sexy like.
    $('<img class="fade-in" style="width:10" src="images/' + images[Math.floor(Math.random() * images.length)] + '"  height="100%" width="462">').appendTo('#banner-load');
</script>

</body>
</html>
