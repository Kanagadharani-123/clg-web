<?php
$img1="img/ach.jpg";
$img2="img/fun1 (1).jpg";
$img3="img/fun1 (2).jpg";
$img4="img/fun1 (3).jpg";
$img5="img/fun1 (4).jpg";
$img6="img/fun1 (5).jpg";
$img7="img/fun1 (6).jpg";
$img8="img/fun1 (7).jpg";
$img9="img/fun1 (8).jpg";
$img10="img/fun1 (9).jpg";
$img11="img/fun1 (11).jpg";
$img12="img/fun1 (12).jpg";
$bgImage="img/bg1.png";
$image_url="img/logo5.png";
$width="100%";
$height="20%"
?>
<html>
<head>
<title>photos</title>
<link rel=stylesheet href="style.css">
<style>
body
{
background-image: url('<?php echo $bgImage; ?>');
}
.dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: #333;
            color: white;
            padding: 12px;
            font-size: 20px;
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
.BORDER
{
BACKGROUND-COLOR:GREY;
}

</style>
</head>
<body>
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
    <a href="ug.PHP"> UG APPLICATION</a>
<a href="pg.PHP"> PG APPLICATION</a>
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
<DIV CLASS="BORDER">
<H1><CENTER><FONT COLOR="VIOLET" FACE="COMIC" >EXPOSE GALLERY</H1></FONT></div>
<div class="img" ><center><font style="times new roman color="white"><h3>
<img src="<?php echo $img1;?>" >
<img src="<?php echo $img2;?>">
<img src="<?php echo $img3;?>">
<img src="<?php echo $img4;?>">
<img src="<?php echo $img5;?>">
<img src="<?php echo $img6;?>">
<img src="<?php echo $img7;?>">
<img src="<?php echo $img8;?>">
<img src="<?php echo $img9;?>">
<img src="<?php echo $img10;?>">
<img src="<?php echo $img11;?>">
<img src="<?php echo $img12;?>">
</img>
</body>
</html>