<?php
$bgImage="img/bg1.png";
$img1="img/S1.jpg";
$img2="img/S2.jpg";
$img3="img/INFRA1 (6).jpg";
$img4="img/images (1).jpg";
$img5="img/p1.jpg";
$img6="img/B1.jpg";
$img7="img/G1.jpg";
$img8="img/R1.jpg";
$img9="img/pP1.jpg";
$img10="img/pH.jpg";
$img11="img/MAIL.jpg";
$img12="img/FUN1 (2).jpg";
$img13="img/ACH.jpg";
$img14="img/IMAGES (2).jpg";


$image_url="img/logo5.png";
$width="100%";
$height="20%"

?>
<html>
<head>
<title>SAASC</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css","corner.css">
<style>
body
{
background-image: url('<?php echo $bgImage; ?>');
background-repeat:no-repeat;
background-size:cover;
}

.div 
{
background-color: white;
width:<?php echo $width;?>;
height:<?php echo $height;?>;
}

.box
{border:2px;
 background-color:red;}

.carousel-inner
{
width:1000px;
height:400PX;
}
.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border:1 px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

.CORNER {
  border-radius: 25px;
  border: 4px solid PINK;
  padding: 20px;
  width: 200px;
  height: 150px;
}
.C11
{
DISPLAY:FLEX;
JUSTIFY-CONTENT:SPACE-AROUND;
ALIGN-ITEMS:CENTER;
FLEX-WRAP:NOWRAP;
PADDING:20PX;
}
.C1
{
BACKGROUND-COLOR:BLACK;
}
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: #333;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 200px;
            text-align: left;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #444;
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #666;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Nested Dropdown Styles */
        .nested-dropdown {
            position: relative;
        }

        .nested-dropdown .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
            background-color: #555;
            min-width: 180px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        }

        .nested-dropdown:hover .submenu {
            display: block;
        }
</style>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="div">
<center>
<img src="<?php echo $image_url;?>" alt="Image" ></center>
</div>
<center>
<div class="DROPDOWN">
  <button class="dropbtn">HOME</button>
  <div class="dropdown-content">
    <a href="INDEX.PHP">HOME</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">ADMISSION</button>
  <div class="dropdown-content">
    <a href="UG.PHP"> UG APPLICATION</a>
<a href="PG.PHP"> PG APPLICATION</a>
<a href="ADMISSION PROCEDURE.PHP"> ADMISSION PROCEDURE</a>

  </div>
</div>

        <div class="dropdown">
            <button class="dropbtn">ACADEMICS</button>
            <div class="dropdown-content">
                <div class="nested-dropdown">
                    <a href="#">COURSES ▼</a>
                    <div class="submenu">
                        <div class="nested-dropdown">
                            <a href="CS.PHP">COMPUTER SCIENCE ▼</a>
<a href="FAS.PHP">FASHION TEC & CD ▼</a>
<a href="VOC.PHP">B.VOC SOFTWARE DEVELOPMENT▼</a>                            
                        
                            
                </div>
            </div>
        </DIV>
<a href="ACHIEVEMENTS.PHP">ACHIEVEMENTS </a>
<a href="PLACEMENTS.PHP">PLACEMENTS </a></DIV></DIV>
<div class="dropdown">
  <button class="dropbtn">ACTIVITIES</button>
  <div class="dropdown-content">
    <a href="SPORTS.PHP">SPORTS</a>
    <a href="INFRASTRUCTURE.PHP">INFRASTRUCTURE</a>
    
  </div>
</div>
<div class="DROPDOWN">
  <button class="dropbtn">GALLERY</button>
  <div class="dropdown-content">
    <a href="PHOTO.PHP">PHOTOS</a>
    
  </div>
</div>

</center>
<div class=box>
<marquee behaviour=scroll scrollamount=10 loop=5><font color="black" face="ARIAL BLACK" size=5>WELCOME TO OUR COLLEGE</form></marquee>
</div><center>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="500">
      <img src="<?php echo $img1;?>" class="d-block w-100" >
    </div>
    <div class="carousel-item" data-bs-interval="500">
      <img src="<?php echo $img2;?>" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="<?php echo $img3;?>" class="d-block w-100" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</center>
<br><br><br>
<DIV CLASS="C11">
<DIV CLASS="CORNER">
<CENTER><img src="<?php echo $img5;?>" width=50px height=50px><br><FONT COLOR="RED" FACE="ARIAL BLACK"><h3>STUDENTS<BR>
2633</center></FONT></div>

<DIV CLASS="CORNER">
<CENTER><img src="<?php echo $img6;?>" width=50px height=50px><br><FONT COLOR="RED" FACE="ARIAL BLACK"><h5>LIBRARY BOOKS<BR>
12000</center></FONT>
</DIV>
<DIV CLASS="CORNER">
<CENTER><img src="<?php echo $img7;?>" width=50px height=50px><br><FONT COLOR="RED" FACE="ARIAL BLACK"><h3>UG<BR>
17</center></FONT></div>

<DIV CLASS="CORNER">
<CENTER><img src="<?php echo $img8;?>" width=50px height=50px><br><FONT COLOR="RED" FACE="ARIAL BLACK"><h3>PG<BR>
7</center></FONT></div>

<DIV CLASS="CORNER">
<CENTER><img src="<?php echo $img9;?>" width=50px height=50px><br><FONT COLOR="RED" FACE="ARIAL BLACK"><h5>PLACEMENTS<BR>
687</center></FONT></div>
</DIV>

<br><br><BR>
<div class="container">
    <div class="row">
    <div class="col 3">
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $img12;?>" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">College Functions</p>
          
        </div>
    </div>
</div>
<div class="col 3">
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $img13;?>" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Students Achievements in their academics.</p>
          
        </div>
    </div>
</div>
<div class="col 3">
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $img14;?>" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Smart class to provide visual class to students.</p>
          
        </div>
    </div>
</div>
</DIV>

<br>
<br><Br>
<div class=c1>
<font color="WHITE"><h3><U>
College Address</U><br></h3><h4>
Syed Ammal Arts and Science College<br>
Dr. E.M.Abdullah Nagar,<br></h4>
<h5><font color="GREY">
Devipattinam Road,<br>
Pullankudi(Po),<br>
Ramanathapuram-623513,<br></h5></FONT>
<h4>
<img src="<?php echo $img10;?>" width=20px height=20px>04567 293100<br>
<img src="<?php echo $img11;?>" width=20px height=20px>info@saasc10.com<br></h4></div>

</body>
</html>