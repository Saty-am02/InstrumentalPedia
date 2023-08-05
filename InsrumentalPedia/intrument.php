<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instrument</title>
    <link rel="stylesheet" href="CSS/video.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

body
{
overflow: hidden;
font-family: 'poppins',sans-serif;
}
section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(to bottom,#f1f4f9,#dff1ff);   
} 
.container
{
    position: relative;
    max-width:450px;
    min-height: 400px;
    background: #000;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
   
}
.form
{
position: relative;
width: 100%;
height: 100%;
padding-left: 50px;
padding-right: 90px;
}
.form h2
{
    position: relative;
    color:#fff;
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 40px;
}
.form h2::before
{

    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 240px;
    background: #fff;
    height: 4px;
    border-radius: 5px;
}
.form .inputBox
{
   width: 100%; 
   margin-top: 10px;
}
.form .inputBox input
{
    width: 100%;
    background:rgba(255,255,255,0.2); 
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255,255,255,0.5);
    border-bottom:1px solid rgba(255,255,255,0.2);
    border-right:1px solid rgba(255,255,255,0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);

}
.form .inputBox input::placeholder
{
    color: #fff;
    
}
.form .inputBox input[type="submit"]
{
    background: #fff;
    color: #666;
    max-width: 170px;
    cursor: pointer;
    margin-bottom: 20px;
    font-weight: 600;
    font-style: bold;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

.forget 
{
    margin-top: 5px;
    color: #fff;
    font-style: bold;
    opacity: 100%;
}  
.forget a
{
    color: #fff;
    list-style: none;
    text-decoration: none;
    margin-left: 5px;
}
.forget-1 a
{
    color: #fff;
    margin-left: 2px;
    font-style: bold;
    text-decoration: none;
}
.forget-1
{
    color: #fff;
    font-style: bold;
    text-decoration: none;
}
    </style>
</head>
<body>
    <section>
        
        <div class="container">

            <div class="form">
            <h2>Instrumental Pedia</h2>
            <form action="instruments.php#one">
                <div class="inputBox"> 
                    <input type="Submit" value="Flute">
                </div>
            </form>
            <form action="instruments.php#two">
                <div class="inputBox"> 
                    <input type="Submit" value="Guitar"> 
                </div>
                 </form>
            <form action="instruments.php#three">
                <div class="inputBox"> 
                    <input type="Submit" value="piano">
                </div>
            </form>
            <form action="instruments.php#four">
                <div class="inputBox"> 
                    <input type="Submit" value="Drums"> 
                </div>
            </form>
            <form action="instruments.php#five">
                <div class="inputBox"> 
                    <input type="Submit" value="Tabla">
                </div>
            </form>
            <form action="instruments.php#six">
                <div class="inputBox"> 
                    <input type="Submit" value="Jal Tarang"> 
                </div>
                <p class="forget">Back to ?<a href="index2.php">Home page</a></p>              
            </form>
            </div>
        </div>
    </section>
</body>
</html>