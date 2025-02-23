<?php
$bgImage="img/bg2.png";
$image_url="img/logo5.png";
$width="100%";
$height="20%"
?>
<html>
<head>
<title>PROCEDURE</title>
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
<FONT FACE="CALIBRI" ><H1>
<U>Admission Procedure</U></H1></center>
<H2>*All admissions into the College are made as per the guidelines of Alagappa University and Government of Tamil Nadu.
<BR>
*Application for admission into the College should be submitted only in the prescribed form available in the College office.
<BR>
*Normally, admissions are done only once in a year in the beginning of the academic year.
<BR>
*Details regarding eligibility for admission, documents to be submitted, fees to be paid, etc., 
are given in the prospectus issued along with the Application Form.
<BR>
*Any candidate who is found to have obtained admission by false representation will be summarily dismissed with 
forfeiture of all fees paid.
<BR>
*If a student is absent without a valid reason and the leave letter for more than continuous five days from the
 date of admission or reopening of the College *whichever is later, the student's name will be removed from the Register.
<BR>
*If a student leaves the College in the middle of any semester, he/she cannot claim remission of any portion of the fees.
<BR>
*Students, who have completed their course of studies, can get their Transfer and Conduct Certificates after 
clearing the dues to the Laboratories & Library by submitting a written application to the Principal. lf a student leaves the College 
at the end of an academic year, he /she can receive the Attendance Certificate required by the University if he/ she applies for it. .
</H2>

</body>
</html>