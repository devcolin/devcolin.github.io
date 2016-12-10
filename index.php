<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<style>
#hidden {display:none}
#progress-bar {position:fixed;z-index:9999;top:0;left:0;width:0;height:2px;background-color:#7f8c8d}
#loading {position:fixed;z-index:999;top:0;left:0;width:100%;height:100%;background:#80ccff url(img/preload.gif) center no-repeat}
body, html {
    height: 100%;
}
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: transparent;
}

#panel {
    padding: 50px;
    display: none;
    position:relative;top:470px;
    font-size: 25px;
    font-family: 'montserratregular';
}

.parallax {
    /* The image used */
    background-image: url('abcd.jpg');

    /* Full height */
    height: 102%; 
    margin-top: -8px;
    margin-left: -8px;
    margin-right: -8px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax2 {

    /* Full height */
    height: 320%; 
    margin-top: -8px;
    margin-left: -8px;
    margin-right: -8px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color:#7f8c8d;
    font-size:126%;
    line-height:1.5;
    font-family: 'montserratregular';
}
.parallax3 {
    /* The image used */
    background-color: white;
    /* Full height */
    height: 93%; 
    margin-top: 50px;
    margin-left: 200px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.top{
    width:100%;
    text-align: center;
}
.button {
    border:none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    opacity: 0.5;
}
.button:hover {
    opacity: 1.0;
    background-color: white;
}
.button1 {
    position: absolute;bottom:190px;left:345px;
    background-color: transparent;
    color: black;
}
.button2 {
    position: absolute;bottom:195px;right:350px;
    background-color: transparent;
    color: black;
}
.button3 {
    position: absolute;bottom:185px;right:580px;
    font-size: 3.0em;
    color: black;
    background-color: transparent;
    cursor: pointer;
}
#home{}
#biography{color:#7f8c8d;height:700px;font-size:126%;line-height:1.5;margin-left:-8px;margin-right:-8px;font-family: 'montserratregular';width:50%;position:relative;left:5%;top:5%;}
#part1{}
#part2{}
img{
    position: absolute;
    right: 0px;
    top: 0px;
    z-index: -1;
}
.info{
    background-color:#72c9b9;
    border:0px;
    font-family: 'montserratregular';
    font-size: 18px;
    color:#fff;
    line-height: 50px;
    height:50px;
    display: block;
    text-transform: uppercase;
 
    width:225px;
    transition:all 200ms linear;
}
.info:hover{
    background-color: #7f8c8d;
}
.parallax3 h1{
color:#72c9b9;
font-family: 'montserratbold';
font-size: 640%;
line-height: 0.8;
}
.text{
    margin-top:20px;
    width:40%;
    height:50px;
    float:left;
    font-family: 'montserratregular';
    padding-top:2px;
    padding-right:20px;
    padding-bottom: 0px;
    padding-left: 20px;
    text-transform: uppercase;
}
input[type="text"]{
    font-family: 'montserratregular';
}
.textarea{
    margin-top:20px;
    width:82.6%;
    height:50%;
    float:left;
    font-family: 'montserratregular';
    text-transform: uppercase;  
    padding-top:20px;
    padding-right:20px;
    padding-bottom: 0px;
    padding-left: 20px;
    text-transform: uppercase;
}
.submit{
    background-color:#72c9b9;
    border:0px;
    font-family: 'montserratregular';
    font-size: 18px;
    color:#fff;
    line-height: 50px;
    height:50px;
    display: block;
    text-transform: uppercase;
    cursor: pointer;
 
    width:225px;
}
.path {
  stroke-dasharray: 800;
  stroke-dashoffset: 800;
  -webkit-animation: dash 5s linear alternate infinite;
}

@-webkit-keyframes dash {
  from {
    stroke-dashoffset: 1300;
    fill-opacity: 0;
  }
  to {
    stroke-dashoffset: 0;
    fill-opacity: 1;
  }
}
.scrollToTop{
    height:80px;
    text-align:center; 
    background: whiteSmoke;
    font-weight: bold;
    color: #444;
    text-decoration: none;
    position:fixed;
    top:320px;
    right:40px;
    display:none;
    background: url('img/backtotop.png');
    background-size: 100% 100%;
}
.scrollToTop:hover{
    text-decoration:none;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css" media="all,handheld" />
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="loading.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>
<div id="hidden">
<div id="progress-bar"></div>
<div id="loading">
    <p style="text-align: center;color:white;margin-top:210px;font-size:20px;font-family:'montserratregular'"> Hello! My name is Adit Lin </p>
    <p style="text-align: center;color:white;margin-top:180px;font-size:21px;font-family:'montserratregular'"> I'm a UI/UX Designer/Full Stack Developer/SEO Analyst </p>
</div>
</div>
<div class="parallax" id="home">
<div class="top">

<button class="button button1">This is my<br>portofolio</button>
<button class="button button2">Scroll down<br>to know me</button>
<button class="button button3">Hello!</button>
<svg width="700" height="600" version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:290px;left:310px;">

        <text class="path" xml:space="preserve" text-anchor="middle" font-family="montserratregular" font-size="65" id="svg_1" y="330" x="350" stroke-width="2" stroke="#000000" fill="#000000" style="z-index: 1;">Nice to meet you :)</text>
</svg>

</div>

</div>
<div id="biography" class="biography">
<br><br>
<h3 style="font-size:36px;">Let me introduce myself!</h3>
<p>Hello there! My name is Adit Lin aka M Rizky Aditya, a self taught, I'm a UI/UX Designer. Me also still learn about the codes. Sometimes I become a full-stack developer, depends on my team skill haha. I really enjoy being freelance programmer because this is my passion :) <br><br>
Currently i live in Jakarta/Indonesia and i have enjoyed multidisciplinary design for more than a year. I don't actually love rushing project, because I believe the final product should make both the client and I proud. I choose the projects i work on and I'm responsible for their design well-being from start to finish. I really happy with someone who want to do some project with me!<br><br>
Wanna do a project together m8? <a href="https://www.facebook.com/aditlin96">Contact me :)</a>
<img src="img/linss.jpg" width="500" height="600" style="position: absolute;right:-550px;">
</div>      

<div class="parallax2" style="background-image: url('img/background.jpg');" id="part1">
    <div class="w3-container">
  <div class="w3-display-container" style="position:relative;margin-top: 50px;">
    <div class="w3-padding w3-display-middle">
      
        <img src="img/testimoni/glamz.png" width="500" height="350">

    </div>
  </div>
  <div class="w3-display-container" style="position:relative;left:25%;margin-top: 160px;">
    <div class="w3-padding w3-display-middle" style="width:40%;">
    <h2> Glamzmoslemwear </h2>
    <p style="color:#72c9b9"> Project SEO and Design </p>
    <p> Website about moslem clothes, we've been working for 2 years since 2014 early. It's so pleasure to work with him as a partner. Hope we still can work together till collapse. </p>
    <a href="#"><button class="info">More info</button></a>
    </div>
   </div>
</div> <!-- end of container -->
 <div class="w3-container" style="margin-top:250px;">
  <div class="w3-display-container" style="position:relative;margin-top: 170px;right:230px;">
    <div class="w3-padding w3-display-middle" style="width: 40%;">
      <h2> Cahaya Scaffolding </h2>
    <p style="color:#72c9b9"> Project SEO 6 Keywords and Design </p>
    <p> Website about steger, we've been working for 3 years since 2013 end. It's so pleasure to work with him as a partner. Hope we still can work together till collapse. </p>
    <a href="#"><button class="info">More info</button></a>
    </div>

  </div>
  <div class="w3-display-container" style="position:relative;left:40%;margin-top: -110px;">
    <div class="w3-padding w3-display-middle"">

    <img src="img/testimoni/scaffolding.png" width="500" height="350">

    </div>
   </div>
</div> <!-- end of container -->
<div class="w3-container" style="position:relative;margin-top: 430px;">
  <div class="w3-display-container">
    <div class="w3-padding w3-display-middle">
      
        <img src="img/testimoni/arsitek.png" width="500" height="350">

    </div>
  </div>
  <div class="w3-display-container" style="position:relative;left:25%;margin-top: 110px;">
    <div class="w3-padding w3-display-middle" style="width:40%;">
    <h2>Grand Golden Indonesia </h2>
    <p style="color:#72c9b9"> Project SEO</p>
    <p> Website about architecture,we're not that long in work together. But i'm glad to be part of his partner. Hope we can work together again oneday :) </p>
    <a href="#"><button class="info">More info</button></a>
    </div>
   </div>
</div> <!-- end of container -->
<div class="w3-container" style="margin-top:250px;">
  <div class="w3-display-container" style="position:relative;margin-top: 170px;right:230px;">
    <div class="w3-padding w3-display-middle" style="width: 40%;">
      <h2> Wisata Solo </h2>
    <p style="color:#72c9b9"> Project SEO 2 Keywords </p>
    <p> Website about Car's rent, we've been working not that long. I really happy be a part of this team. Hope we can work together again, success is yours sir! </p>
    <a href="#"><button class="info">More info</button></a>
    </div>

  </div>
  <div class="w3-display-container" style="position:relative;left:40%;margin-top: -110px;">
    <div class="w3-padding w3-display-middle"">

    <img src="img/testimoni/wisatasolo.png" width="500" height="350">

    </div>
   </div>
</div> <!-- end of container -->
<div class="w3-container" style="position:relative;margin-top: 430px;">
  <div class="w3-display-container">
    <div class="w3-padding w3-display-middle">
      
        <img src="img/testimoni/arsitek.png" width="500" height="350">

    </div>
  </div>
  <div class="w3-display-container" style="position:relative;left:25%;margin-top: 110px;">
    <div class="w3-padding w3-display-middle" style="width:40%;">
    <h2>Anggrek-Lintang </h2>
    <p style="color:#72c9b9"> Project SEO</p>
    <p> Website about hobby. Sadly, we're not that long in work together... :( But i'm glad to be part of his partner. Hope we can work together again oneday! </p>
    <a href="#"><button class="info">More info</button></a>
    </div>
   </div>
</div> <!-- end of container -->
</div> <!-- end of parrallax2 -->
<div class="parallax3" id="part2">
<h1> SAY 'HELLO :)'</h1>
<a href="#home" class="scrollToTop" style="width: 100px;"></a>
<form method="POST" id="visitor" action="">
<input type="text" class="text" id="your-name" placeholder="YOUR NAME">
<input type="text" class="text" id="your-name" placeholder="YOUR E-MAIL" style="margin-left:30px;">
<textarea rows="6" class="textarea" cols="103" name="message" placeholder="Your Message"></textarea>
<button class="submit" type="submit" style="position: relative;top:30px;">Send Message</button>
</form>
</div> <!-- end of parrallax3-->
<script>
$(document).ready(function(){
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 3400) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},1200);
        return false;
    });
    
});
</script>
<script>
$(window).scroll(function(){
    $(".parallax").css("opacity", 1 - $(window).scrollTop() / 500);
  });
</script>
<script type="text/javascript">
$(document).ready(function() {
$("#hidden").css('display', 'block');
$("#progress-bar").animate({width:"100%"}, 2000); });
$(window).bind('load', function() {
$("#progress-bar").stop().animate({width:"100%"}, 5000, function() {
$("#hidden").fadeOut(1000); }); });
</script>
</body>
</html>