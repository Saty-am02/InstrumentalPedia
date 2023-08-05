<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup form</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }
body
{
overflow: hidden;
place-items: center;
}
section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(to bottom,#f1f4f9,#dff1ff);   
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
    min-height: 500px;
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
    margin-top: 20px;
}
.form h2::before
{

    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 85px;
    background: #fff;
    height: 4px;
    border-radius: 5px;
    transition:0.5s;
}
.form h2:hover::before
{
    width: 165px;
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
    margin-bottom: 20px;
    font-weight: 600;
    font-style: bold;
}
input[type="radio"]{
    display: none;
}
.gender{
   
    display: flex;
   justify-content: space-between;
   margin-right: 35px;
}
label{
    display: block;
    cursor: pointer;
    font-weight: 500;
    margin-bottom: 10px;
}

label span{
    display:inline-flex;
    align-items: center;
    padding: 10px 20px 10px 10px;
    border-radius: 31px;
    transition: .25s ease;
    color: #666;
    background-color: white; 
 
}

label span:hover,
input[type="radio"]:checked + span{
    background-color: white;
   
} 

label span:before{
    content: "";
    background-color: white;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    margin-right: 10px;
    transition: .25s ease;
    box-shadow:  inset 0 0 0 2px #666;
}

input[type="radio"]:checked + span:before{
    box-shadow: inset 0 0 0 10px black;
}
.dropdown
{
    color: white;
    background-color:white;
    border: none;
    display: none;
}
.forget
{

    color: #fff;
    margin-bottom: 20px;

}   
.forget a
{
    color: #fff;
  
}
.forget-1 a
{  
    color: #fff;
    margin-left: 2px;
    font-style: bold;
    text-decoration: none;
    padding-bottom: 10px;
}
.forget-1
{  margin-top: -15px;
    color: #fff;
    font-style: bold;
    text-decoration: none;
    padding-bottom: 20px;
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
            <h2>signup Form</h2>
            <form action="" method="post">
                <div class="inputBox">
                    <input type="text" name="fname" placeholder="First Name" required="">
                </div>
                <div class="inputBox">
                        <input type="text" name="lname" placeholder="Last Name" required="">
                </div>
                <div class="inputBox">
                    <input type="text" name="username" placeholder="username" required="">
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="password" required="">
                </div>
                <div class="inputBox">
                 <div class="gender" >
                            <label>
                            <input type="radio" id="MALE" name="gender"/>
                            <span>MALE</span>
                        </label>
                            <label>
                            <input type="radio" id="FEMALE" name="gender" checked=""/>
                            <span>FEMALE</span>
                        </label>
                </div>
            </div>  
                <div class="inputBox"> 
                <audio id="beep" preload="auto">
                         <source  src="music/login.wav"></source>
                </audio>
                    <input type="submit" name="submit" value="signup" id="nav">
                    <script>
                    var beepOne = $("#beep")[0];
                         $("#nav")
                           .mouseenter(function() {
                         beepOne.play();
                          });
                    </script>

                </div>
                
                <p class="forget">Already have an account ?<a href="login.php">Login</a></p>
                <p class="forget-1">Back to !<a href="index.php">Home page</a></p>
         
            </form>
        </div>
    </div>
    
   
    </section>
    <?php
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $language=$_POST['language'];
        $count=0;
        $sql='SELECT username from sinus';
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res)){
            if($row['username']==$_POST['username']){
                $count=$count+1;
            }
        }

        if($count==0){
            mysqli_query($db,"INSERT INTO `sinus` VALUES('$_POST[username]', '$_POST[password]'
            , '$_POST[gender]','$_POST[language]');");

            ?>
                <script type="text/javascript">
                    alert("Registration Successful");
                    window.location="login.php"
                </script>
            <?php
            
        }
        else{
    ?>
        <script type="text/javascript">
            alert("This username already exists.");
        </script>
    <?php
        }
    }
    ?>
</body>
</html>