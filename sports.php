<?php
$bgImage="img/bg4.jpg";
$image_url="img/logo5.png";
$width="100%";
$height="20%"
?>
<html>
<head>
<title>sports</title>
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
<p>
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
</center><font face="times new roman" color="white"><h1>
DEPARTMENT OF PHYSICAL EDUCATION
INTRODUCTION</h1></font><font face="calibri" color="white"><h3>
SAASCs Sports and Games are comprehensive programmes that incorporate many
 activities during an academic year. Activities available to students encompass indoor 
and outdoor sports such as Basketball, Badminton, Chess, Cricket, Carom, Table, Volleyball,
 Kho-Kho, Kabaddi, Yoga and many other worthwhile recreational choices. 
At SAASC we encourage our students to become fully involved in the Sports Programme 
in order to take advantage of the opportunities being offered. The eclectic mix of activities gives SAAS College a vibrant atmosphere and gives the students the opportunity to become risk takers, make lasting friendships and develop skills and passions beyond the academic timetable.
</font><font face="times new roman" color="white"><h3>
Outdoor Sports Facilities</h3>
<h4>Athletics / Track and Field<br>
Basketball<br>
Badminton<br>
football<br>
Volleyball<br>
Cricket<br>
Hockey<br></h4>
<br>
<h3>Indoor Sports Facilities<br></h3>
<h4>Chess<br>
Carom<br>
Table Tennis<br>
Yoga & Recreation<br>
Volleyball<br>
Badminton<br>
Kabaddi<br><br></h4>

In the SAASC Students have been actively competing at Tournaments for the Academic year 2019-2020. SAASC Teams have been making their Presence felt as a Competitive team at various SOUTH-Zone and All India tournaments with their competitive Performance and Sportsman Spirit. This year the SAASC University teams have so far competed at the following Tournaments.

</p>
</body>
</html>