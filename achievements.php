<?php
$bgImage="img/bg1.png";
$image_url="img/logo5.png";
$width="100%";
$height="20%"
?>
<html>
<head>
<title>ACHIEVEMENTS</title>
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
BACKGROUND-COLOR: GREEN;
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
<DIV CLASS="BOX">
<H1><FONT FACE="TIMES NEW ROMAN" COLOR="WHITE">
Awards and Achievements</H1>

</DIV>
</center><CENTER>
<iframe id="mypdf" src="prize.pdf" frameborder="1" width="80%" height="600px"></iframe>
<P><FONT FACE="TIMES NEW ROMAN" COLOR="WHITE">
<H1><U>Academics:</U></H1><BR>
<H2>*Our students have received excellence awards for outstanding academic performance.<BR>
*The college honors top-ranking students every year with special merit certificates.<BR>
<H1><U>Sports:</U></H1><BR>
<H2>*The sports team has won several intercollegiate championships in football and basketball.<BR>
*Our athletes have represented the institution at state and national levels.<BR>
<H1><U>NSS (National Service Scheme):</U></H1>
<H2>*NSS volunteers have received recognition for their exceptional community service.<BR>
*The college was awarded for conducting the best social awareness programs under NSS.<BR>
<H1><U>NCC (National Cadet Corps):</U></H1>
<H2>*Our NCC cadets have won awards for their discipline and leadership in various training camps.<BR>
*Several cadets have been selected for Republic Day parades and other national events.<BR>
<H1><U>NAAC (National Assessment and Accreditation Council):</U></H1>
<H2>*The institution has been accredited by NAAC with a prestigious grade.<BR>
*Our college has received commendation for excellence in teaching and infrastructure.<BR>
</P>

</body>
</html>