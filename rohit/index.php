<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
 <head >   
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="title">INSTRUMENTAL PEDIA</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/rohit.css">
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
.body
{
    justify-content: center;
    align-items: center;
    overflow-x: hidden;
    z-index: 10000;
}
#header
{
    justify-content: center;
    align-items: center;
    overflow-x: hidden;
    background: aqua;

}
.header img
 {  
    object-fit: cover;
    height: 100%;
    width: 100%;
    align-items: center;
    justify-content: center;
    
}
.header h1
{
    opacity: 0.6;
    font-family: 'Poppins', sans-serif;
}
.header h1:hover
{
    opacity: 1;
    transform: scale(1.1);
}
#header ul
{   display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    float: right;

}
#header ul li a
{  
    font-weight: 700;
    text-decoration: none;
    padding: 6px 15px;
    color:black;
    border-radius: 20px;
    font-family: 'Poppins', sans-serif;
    font-style: bold;
    margin-right: 50px;
    
}
#header ul li a:hover
{
    
    color:lightgoldenrodyellow;
    background: rgb(8, 75, 141);
}
.header h1
{
    position: absolute;
    font-size: 25px;
    /* font-family: monospace; */
    align-items: center;
    position: absolute;
    margin-left: 20px;

}
h2
{   
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 50px;
    /* font-family: 'Lobster' , cursive ; */
    color: black;
    /* transform: translateY(700px); */
    background-color: aqua;

}
p
{
    font-size: 30px;
    align-items: center;
    justify-content: center;
    text-align: center;
    /* transform: translateY(-710px); */
    font-size: 30px;
    color: rgb(32, 32, 32);
}
 .about h2:hover
{
    
    color: lightgoldenrodyellow;
}
div #icon
{
    justify-content: flex-end;
    align-items: flex-end;
}
footer
{
    position: relative;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 130px;
    flex-direction: column;
    background-color: aqua;
    
}

.logo
{

    width: 100%;
    object-fit: cover;
    /* background: aqua; */
}
embed
{
    position: relative;
    z-index: 1; 
    height:300px; 
    width:350px;
    /* transform: translateY(-170px); */
    left: 520px;

}
footer .menu
{
    position: relative;
    justify-content: center;
    align-items: center;
    display: flex;
    margin: 0px 10px;
    /* margin-right:45%;
    margin-bottom: 25px; */
    flex-wrap: wrap;
}
footer .menu li
{
list-style: none;

}
footer .menu li a
{
   font-size: 1.2em; 
   color: black;
   padding:0px 20px ; 
   transition: 0.25s;  
   display: inline-block;
   text-decoration: none; 
   opacity: 0.5;
   font-weight: 600;
   font-family: 'Poppins', sans-serif;
}
footer .menu li a:hover
{
    opacity: 1;
    transform: scale(1.25);
}
.hh
    {
  
       font-size:20px;
       opacity: 0.5;
       transform: translateY(20px);
       font-family: 'Poppins', sans-serif;
    }
    .hh:hover
    {
        opacity:1; 
        
    }
  </style>  
 </head>
<body>
    <header class="header" id="header"> 
    <h1 id="h1">INSTRUMENTAL PEDIA</h1>
    <audio id="be"  preload="auto">
			<source src="music/sneeze.wav"></source>
	</audio>
    <script>
		 var beepOne = $("#be")[0];
             $("#h1")
	         .mouseenter(function() {
	  	 beepOne.play();
	     });
         </script> 

         <ul class="navigation" id="nav">
            
            <li><a href="#" class="active">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>

            <audio id="beep" preload="auto">
               <source src="music/login.wav"></source>
            </audio>

        </ul>
        <script>
		 var beepOne = $("#beep")[0];
             $("#nav a")
	         .mouseenter(function() {
	  	 beepOne.play();
	     });
         </script> 
        
    
    <img src="./img/bg.jpeg"  onClick="document.getElementById('audi').play(); return false;">
        <div class="logo">
        <audio id="audi">
            <source src="./music/po,po,po.wav" type="audio/wav">
        </audio>

         <h2 onClick="document.getElementById('aud').play(); return false;">INSTRUMENTAL PEDIA</h2>
      
         <p>A musical instrument is a device created or adapted to make musical sounds. In principle, any object that produces sound can be considered a musical instrument—it is through purpose that the object becomes a musical instrument. A person who plays a musical instrument is known as an instrumentalist. The history of musical instruments dates to the beginnings of human culture. Early musical instruments may have been used for rituals, such as a horn to signal success on the hunt, or a drum in a religious ceremony.</p>
        </div>
        <embed src="./img/elephant.gif" autoplay onClick="document.getElementById('audio').play(); return false;" >
        <audio id="audio">
            <source src="./music/trumpet21.mp3" type="audio/mp3">
        </audio>
    </header>
    <footer>
    <ul class="menu" id="menu">
        <li><a href="#">Home</a></li>
        <li><a href="mailto:surohit03@gmail.com">Contact</a></li>
        <li><a href="#about">About</a></li>
        <audio id="beep-two"  preload="auto">
				<source src="music/logout.wav"></source>
		</audio>
    </ul>
    <script>
		 $("#menu a")
      .each(function(i) {
        if (i != 0) {
         $("#beep-two")
        .clone()
        .attr("id", "beep-two" + i)
        .appendTo($(this).parent());
        }
         $(this).data("beeper", i);
           })
           .mouseenter(function() {
            $("#beep-two" + $(this).data("beeper"))[0].play();
        });
           $("#beep-two").attr("id", "beep-two0");
    </script>
    <span class="hh"> ©️2022 INSTRUMENTAL PEDIA| All Rights Reserved</span>
</footer>
</body>
</html>
