<?php
$IMG1="IMG/pc1.JPG";
$bgImage="img/bg2.JPg";

$image_url="img/logo5.png";
$width="100%";
$height="20%"
?>
<html>
<head>
<title>PLACEMENTS</title>
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
.BOX
{
BACKGROUND-COLOR:GREEN;
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
  <div class="dropdown-content"> <a href="UG.PHP"> UG APPLICATION</a>
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
<PRE><CENTER>
<DIV CLASS="BOX">
<H2><FONT FACE="TIMES NEW ROMAN" COLOR="WHITE">
PLACEMENTS</H1>

</DIV>
<FONT FACE="CALIBRI" COLOR="WHITE"><H2>
<div>

Campus placement or campus interview is the program conducted within educational institutes or in a common place to 
provide jobs to students pursuing or in the stage of completing the programme. 
In this programme, industries visit the colleges to select students depending on their ability to work, capability, 
focus and aim

<u>Objective</u>
The major objective of campus placement is to identify the talented and qualified professionals before they 
complete their education. It provides employment opportunities to students who are pursuing or in the final
 stage of completing the course. This process reduces the time for an industry to pick the candidates according to their need.

It is a cumbersome activity and hence majority of the companies find it difficult to trace the right talent. 
Many students do not understand the importance of placement training that is being imparted, whether it is
 aptitude training or soft skills.


They show the least interest in this due to various factors viz., projects, assignments or more of activities 
loaded by the colleges as part of their curriculum thinking. 
It is the responsibility of the companies training on placement to make the students equipped on all aspects
 of career development along with creating a very good impact in them which makes them feel every minute they spend in the
 placement training session is worth being there and will help them in getting placed in their dream companies.
</div>
</PRE>
</body>
</html>