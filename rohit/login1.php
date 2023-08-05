<?php
 include "connection.php";
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
*
{
    top:0;
}
body
{
overflow: hidden;
font-family: 'poppins',sans-serif;
z-index: 10001;
}
section
{
    display: flex;
    justify-content: center;
    align-items: center;
}
section .color
{
    position: absolute;
    filter: blur(120px);
}  
.container
{
    position: relative;
    width: 400px;
    min-height: 400px;
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    top:220px;
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
    width: 70px;
    background: #fff;
    height: 4px;
    border-radius: 5px;
    z-index: 10001;
    transition:0.5s;
}
.form h2:hover::before
{
    width: 150px;
}
.form .inputBox
{
   width: 100%; 
   margin-top: 20px;
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
    max-width: 100px;
    cursor: pointer;
    margin-bottom: 40px;
    font-weight: 600;
    font-style: bold;
}

.forget
{
    margin-top: -10px;
    color: #fff;
    text-decoration: none;
}  
.forget a
{
    color: #fff;
    text-decoration: none;
}
.forget-1 a
{
    color: #fff;
    margin-left: 2px;
    font-style: bold;
    text-decoration: none;
}
.forget-1
{ margin-top: -10px;
    color: #fff;
    font-style: bold;
    text-decoration: none;
}
img {
    height: 100%;
    width: 100%;
    position: absolute;
}
</style>
</head>
<body>
    <section>
        <img src="./img/city.jpg" alt="">
        <div class="container">
         <div class="form">
            <h2>Login Form </h2>
            <form action="" method="post">
                <div class="inputBox">
                    <input type="text" name="username" placeholder="username" required="">
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="password" required="">
                </div>
                <div class="inputBox"> 
                <input type="submit" name="submit" value="Login" id="nav" >
                
		   	<audio id="beep" preload="auto">
				<source  src="music/login.wav"></source>
			</audio>
                </div>
            
                <p class="forget">Don't have an account ?<a href="signup.php">Sign up</a></p>
                <p class="forget-1">Back to !<a href="index.php">Home page</a></p>
       
            </form>
            </div>
        </div>
        <script>
		var beepOne = $("#beep")[0];
             $("#nav")
	          .mouseenter(function() {
		       beepOne.play();
	         });
    </script>
    </section>
    <?php
        if(isset($_POST['submit'])){
            $count=0;
            $res=mysqli_query($db,"SELECT * FROM `sinus` WHERE username='$_POST[username]' && password='$_POST[password]' ;");

            $row=mysqli_fetch_assoc($res);

            $count=mysqli_num_rows($res);

            if($count==0){
                ?>
                
                <div class="alert alert-danger" style="width: 500px; margin-left: 450px; margin-top: -80px; text-align: center; background-color: #000; color: white;">
                    <strong> The username and password doesn't matched. </strong>
                </div>
                <?php
            }
            else{
                $_SESSION['login_user'] = $_POST['username'];
                
                ?>
                <script type="text/javascript">
                    window.location="index2.php"
                </script>
                <?php
            }
        }
    ?>
    
</body>
</html>