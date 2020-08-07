
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBusiness</title>
        <!-- online / offline google cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
            window.jquery || "<script src='js/offline-jQuery.js'><\/script>"
        </script>
      
       
        <!-- CSS LINK -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style/internal.css">
        <link rel="stylesheet" type="text/css" href="style/responsive.css">
        <link rel="stylesheet" type="text/css" href="style/animate.css">
        <link rel="stylesheet" href="style/slider-pro.min.css"/>
         <link rel="stylesheet" href="style/jquery.mobile-menu.css"/>
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
      
     
        <!-- SCRIPT LINK -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/internal.js"></script>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/jquery.sliderPro.min.js"></script>
         <script src="js/jquery.mobile-menu.js"></script>

</head>
<body>
    <div class="container-fluid bg-primary p-3" >
        <span class="text-light font-weight-bold ">エアコン修理の</span> <br />
        <span class="text-warning font-weight-bold" style="font-size: 30px;">スフィリオ</span>

                    <div class="right-div font-weight-bold animated fadeIn infinite">東京/埼玉<br />
            全域対応！！！</div>
    </div>
   <div id="navbar">
    <div id="menu-nav">
    
      <a href="#">Phone number: 688-2384-3692</a>
      <a href="#">Business hours: 8時~22時</a>
      <a href="#">Motto/catch frase: 迅速な対応。他社より安い価格。</a>

    
       </div>
    </div>
       

    <div class="mobile-menu">
           <ul>
            <li><a href="#"><i class="fa fa-phone text-warning"></i>&nbsp;Phone number: 688-2384-3692</a></li>
            <li> <a href="#"><i class="fa fa-bank text-warning"></i>&nbsp;Business hours: 8時~22時</a></li>
            <li> <a href="#"><i class="fa fa-angellist text-warning"></i>&nbsp;Motto/catch frase: 迅速な対応。他社より安い価格。</a></li>
            <li><a href="#"><i class="fa fa-dollar text-warning"></i>&nbsp;Prices: 水漏れ14万円！ ガス充填2万円~2万5千円通常価格の6割以下！</a></li>
            <li><a href="#"><i class="fa fa-book text-warning"></i>&nbsp;Campaign:基本出張作業費0¥ + お友達の紹介で5千円割引</a></li>
        </ul>
    </div>




<div class="container-fluid p-0 m-0" style="width: 99%">
    
<div class="row p-0">
    <div class="col-md-4 p-0">       
        <div class="slider-pro " id="my-slider">
            <div class="sp-slides">
                <!-- Slide 1 -->
                <div class="sp-slide">
                    <img class="sp-image" src="pics/image1.png"/>
                </div>
                
                <!-- Slide 2 -->
                <div class="sp-slide">
                     <img class="sp-image" src="pics/image2.png"/>
                </div>
                
                <!-- Slide 3 -->
                <div class="sp-slide">
                     <img class="sp-image" src="pics/image3.png"/>
                </div>
            </div>
        </div>

        <div class="down-side">
            <h3 align="center"><b>電気の救助隊は安心価格！</h3><hr />
                <h5>
                    <span style="color: red">作業前に作業内容と見積もりを必ず提示します。
                    お客様にご納得いただいたうえで作業に着手します。
                    ご納得いただけなかった場合、費用は一切いただいていません。</b>
                </span>
                </h5>
        </div>
    </div>
    <div class="col-md-8 p-0">
        <img src="pics/image4.png" style="width: 95%;">
    </div>
</div>
</div>




<script>
    // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
$( document ).ready(function( $ ) {
        $( '#my-slider' ).sliderPro();
    });

</script>
</body>
</html>
