<?php
$bgImage="img/bg1.png";
$img2="img/infra1 (1).jpg";
$img3="img/infra1 (2).jpg";
$img4="img/infra1 (3).jpg";
$img5="img/infra1 (4).jpg";
$img6="img/infra1 (5).jpg";
$img7="img/infra1 (6).jpg";
$img8="img/infra1 (7).jpg";
$img9="img/infra1 (8).jpg";
$image_url="img/logo5.png";
$width="100%";
$height="20%"
?>
<html>
<head>
<title>INFRASTRUCTURE</title>
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
<div ><font face="calibri" color=red><h1>
AUDITORIUM<BR>
<img src="<?php echo $img2;?>"><BR>
SEMINAR HALL<BR>
<img src="<?php echo $img3;?>"><BR>
Laboratories<BR>
<img src="<?php echo $img4;?>"><BR>
<img src="<?php echo $img5;?>"><BR>
ICT<BR>
<img src="<?php echo $img6;?>" width=50%><BR>
TRANSPORT<BR>
<img src="<?php echo $img7;?>"><BR>
LIBRARY<BR>
<img src="<?php echo $img8;?>"><BR>
<img src="<?php echo $img9;?>"></img>
</center></div>
</body>

</body>
</html>