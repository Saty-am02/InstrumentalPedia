<?php
 include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instruments</title>
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
overflow-y: hidden;
place-items: center;
}
section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: black;   
}
.container
{
    position: relative;
    min-width: 400px;
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
    width: 270px;
    background: #fff;
    height: 4px;
    border-radius: 5px;

}
.form .inputBox-1 h2::before
{

    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 270px;
    background: #fff;
    height: 4px;
    border-radius: 5px;

}
.form .inputBox-2 h2::before
{

    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 270px;
    background: #fff;
    height: 4px;
    border-radius: 5px;

}
.form .inputBox-3 h2::before
{

    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 270px;
    background: #fff;
    height: 4px;
    border-radius: 5px;

}.form .inputBox-4 h2::before
{

    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 270px;
    background: #fff;
    height: 4px;
    border-radius: 5px;

}.form .inputBox-5 h2::before
{

    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 270px;
    background: #fff;
    height: 4px;
    border-radius: 5px;

}

.forget
{

    color: #fff;
    margin-bottom: 20px;
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
    padding-bottom: 10px;
}
.forget-1
{  margin-top: -15px;
    color: #fff;
    font-style: bold;
    text-decoration: none;
    padding-bottom: 20px;
}
.inputBox p
{
    color: azure;
}

    </style>
</head>
<body>
    <section class="one" id="one">
        <div class="container">
         <div class="form">
            
            <div class="inputBox">
            <h2>Flute !</h2>
            </div>
            <form action="#"> 
                <div class="inputBox">
                   
                        <img src="./img/flute.jpeg" onClick="document.getElementById('audio_play').play(); return false;" /><br>
        <audio id="audio_play">
          <source src="./music/8AZHNK2-flute-intro-stinger.mp3" type="audio/wav">
        </audio>
     
                <br><p>The flute is a family of musical instruments in the woodwind group. Unlike woodwind instruments with reeds, a flute is an aerophone or reedless wind instrument that produces its sound from the flow of air across an opening. <br> According to the instrument classification of Hornbostel–Sachs, flutes are categorized as edge-blown aerophones.A musician who plays the flute is called a flautist or flutist.The oldest flute ever discovered may be a fragment of the femur of a juvenile cave bear, with two to four holes, found at Divje Babe in Slovenia and dated to about 43,000 years ago. However, this has been disputedA three-holed flute, 18.7 cm long, made from a mammoth tusk (from the Geißenklösterle cave, near Ulm, in the southern German Swabian Alb and dated to 30,000 to 37,000 years ago)</p><br>
                </div>
                <br><p class="forget">Back to ! <a href="intrument.php"> Instrument`s section</a></p>
                <p class="forget-1">Back to !<a href="index2.php">Home page</a></p>
            </form>
            </div>
        </div>
    </section>
    <section class="two" id="two">
        
        <div class="container">
         <div class="form">
              <div class="inputBox-1">
            <h2>Guitar !</h2>
            
            <form action="#"> 
                <div class="inputBox">
                    <img src="./img/guitar.jpeg" onClick="document.getElementById('audio_pla').play(); return false;"><br>
                    <audio id="audio_pla">
                        <source src="./music/mixkit-cool-guitar-riff-2321.wav" type="audio/wav">
                      </audio>
                    <br><p>The guitar is a fretted musical instrument that typically has six strings. It is held flat against the player's body and played by strumming or plucking the strings with the dominant hand, while simultaneously pressing selected strings against frets with the fingers of the opposite hand. A plectrum or individual finger picks may also be used to strike the strings. The sound of the guitar is projected either acoustically, by means of a resonant chamber on the instrument, or amplified by an electronic pickup and an amplifier.
                        There are three main types of modern guitar: the classical guitar (Spanish guitar/nylon-string guitar); the steel-string acoustic guitar or electric guitar; and the Hawaiian guitar (played across the player's lap). Traditional acoustic guitars include the flat top guitar (typically with a large sound hole) or an archtop guitar, which is sometimes called a "jazz guitar". The tone of an acoustic guitar is produced by the strings' vibration, amplified by the hollow body of the guitar, which acts as a resonating chamber. The classical Spanish guitar is often played as a solo instrument using a comprehensive fingerstyle technique where each string is plucked individually by the player's fingers, as opposed to being strummed. The term "finger-picking" can also refer to a specific tradition of folk, blues, bluegrass, and country guitar playing in the United States.
                    </p><br>
                </div>
                <p class="forget">Back to ! <a href="intrument.php"> Instrument`s section</a></p>
                <p class="forget-1">Back to !<a href="index2.php">Home page</a></p>
            </form>
            </div>
        </div>
    </section>
    <section class="three" id="three">

        <div class="container">
         <div class="form">
            <div class="inputBox-2">
            <h2>piano !</h2>
            
            <form action="#"> 
                <div class="inputBox">
                    <img src="./img/piano.jpeg" onClick="document.getElementById('audio_pl').play(); return false;"><br>
                    <audio id="audio_pl">
                        <source src="./music/KELSBTY-bright-piano-logo.mp3" type="audio/mp3">
                      </audio>
                    <br><p>The piano is an acoustic, keyboard, stringed percussion instrument in which the strings are struck by wooden hammers that are coated with a softer material (modern hammers are covered with dense wool felt; some early pianos used leather). It is played using a keyboard, which is a row of keys (small levers) that the performer presses down or strikes with the fingers and thumbs of both hands to cause the hammers to strike the strings. It was invented in Italy by Bartolomeo Cristofori around the year 1700.
                        A piano usually has a protective wooden case surrounding the soundboard and metal strings, which are strung under great tension on a heavy metal frame. Pressing one or more keys on the piano's keyboard causes a wooden or plastic hammer (typically padded with firm felt) to strike the strings. The hammer rebounds from the strings, and the strings continue to vibrate at their resonant frequency.[4] These vibrations are transmitted through a bridge to a soundboard that amplifies by more efficiently coupling the acoustic energy to the air. When the key is released, a damper stops the strings' vibration, ending the sound. Notes can be sustained, even when the keys are released by the fingers and thumbs, by the use of pedals at the base of the instrument. The sustain pedal enables pianists to play musical
                    </p>    
                </div>
               <br> <p class="forget">Back to ! <a href="intrument.php"> Instrument`s section</a></p>
                <p class="forget-1">Back to !<a href="index2.php">Home page</a></p>
            </form>
            </div>
        </div>
    </section>
    <section class="four" id="four">
        <div class="container">
         <div class="form">
            <div class="inputBox-3">
            <h2>Drums !</h2>
            
            <form action="#"> 
                <div class="inputBox">
                    <img src="./img/drum.jpeg" alt="" onClick="document.getElementById('audio_p').play(); return false;"><br>
                    <audio id="audio_p">
                        <source src="./music/Drum Sound ! English Song Tone (1)(3).mp3" type="audio/mp3">
                      </audio>
                    <br><p>percussion group of musical instruments. In the Hornbostel-Sachs classification system, it is a membranophone.Drums consist of at least one membrane, called a drumhead or drum skin, that is stretched over a shell and struck, either directly with the player's hands, or with a percussion mallet, to produce sound. such as the thumb roll. Drums are the world's oldest and most ubiquitous musical instruments, and the basic design has remained virtually unchanged for thousands of years.
                        Drums may be played individually, with the player using a single drum, and some drums such as the djembe are almost always played in this way. Others are normally played in a set of two or more, all played by the one player, such as bongo drums and timpani. A number of different drums together with cymbals form the basic modern drum kit.Drums are usually played by striking with the hand, a beater attached to a pedal, or with one or two sticks with or without padding. A
                    </p>
                </div>
                <br><p class="forget">Back to ! <a href="intrument.php"> Instrument`s section</a></p>
                <p class="forget-1">Back to !<a href="index2.php">Home page</a></p>
            </form>
            </div>
        </div>
    </section>
    <section class="five" id="five">
   
        <div class="container">
         <div class="form">
            <div class="inputBox-4">
            <h2>Tabla !</h2>
            
            <form action="#"> 
                <div class="inputBox">
                    <img  style="width: 300px; height: 150px;" src="./img/tabla.jpeg" alt="" onClick="document.getElementById('audio_').play(); return false;"><br>
                    <audio id="audio_">
                        <source src="./music/Tabla Sound(2).mp3" type="audio/mp3">
                      </audio>
                  <br><p>tabla is a pair of twin hand drums from the Indian subcontinent. Since the 18th century,Tabla is also frequently played in popular and folk music performances in India, Bangladesh, Pakistan, Nepal, Afghanistan and Sri Lanka.The tabla is also an important instrument in the bhakti devotional traditions of Hinduism and Sikhism, such as during bhajan and kirtan singing. It is one of the main qawali instrument used by Sufi musicians.Tabla also features in dance performances such as Kathak.
                    The textual evidence for similar material and methods of construction as tabla comes from Sanskrit texts. The earliest discussion of tabla-like musical instrument building methods are found in the Hindu text Natyashastra. This text also includes descriptions of paste-patches (syahi) such as those found on a tabla.[19] The Natyashastra also discusses how to play these drums. The South Indian text Silappatikaram, likely composed in the early centuries of 1st millennium CE, describes thirty types of drums along with many stringed and other instruments. These are, however, called pushkara; the name tabla appears in later periods.
                  </p>
                </div>
            <br><p class="forget">Back to ! <a href="intrument.php"> Instrument`s section</a></p>
                <p class="forget-1">Back to !<a href="index2.php">Home page</a></p>
            </form>
            </div>
        </div>
    </section>
    <section class="six" id="six">

        <div class="container">
        <div class="form">
            <div class="inputBox-5">
            <h2>Jal Tarang !</h2>
            
            <form action="#"> 
                <div class="inputBox">
                <img src="./img/jaltarang.jpeg" alt="" onClick="document.getElementById('audio').play(); return false;"><br>
                <audio id="audio">
                    <source src="./music/Jal Tarang(2)(2).mp3" type="audio/mp3">
                  </audio>
                <br><p>The earliest mention of the Jaltarang is found in 'Vatsyayana's Kamasutra' as playing on musical glasses filled with water.Jal-tarang was also mentioned in the medieval Sangeet Parijaat text, which categorized this instrument under Ghan-Vadya (idiophonic instruments in which sound is produced by striking a surface, also called concussion idiophones.) The SangeetSaar text considers 22 cups to be a complete jal tarang and 15 cups to be one of mediocre status. The cups, of varying sizes, are made of either bronze or porcelain. Jal-tarang was also called jal-yantra in medieval times, and poets of the Krishna cult (also called Ashtachhap poets) have mentioned this instrument.
                    Today only porcelain bowls are preferred by artists. Cups for Manda Swar (notes of lower octave) are large while those for Taar Swar (notes of higher octaves) are smaller in size. Water is poured into the cups and the pitch is changed by adjusting the volume of water. The number of cups depends on the melody being played. The bowls are mostly arranged in a semicircle in front of the player, who can then reach them all easily. The player softly hits the cups with a wooden stick on the border to obtain the sound. Tuning the instrument isn't easy and requires some skill. While playing, 
                </p>
                </div>
               <br> <p class="forget">Back to ! <a href="intrument.php"> Instrument`s section</a></p>
                <p class="forget-1">Back to !<a href="index2.php">Home page</a></p>
            </form>
            </div>
        </div>
    </section>
</body>
</html>
