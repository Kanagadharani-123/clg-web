<?php
$bgImage="img/bg1.png";
$image_url="img/logo5.png";
$width="100%";
$height="20%"
?>
<html>
<head>
<title>PG</title>
<link rel=stylesheet href="style.css">
<style>
body
{
background-image: url('<?php echo $bgImage; ?>');
}.dropdown {
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
  .form-container {
            margin-top: 20px;
            padding: 20px;
            border: 2px solid black;
            width: 50%;
            background-color: #f9f9f9;
        }
        .form-container input, .form-container select, .form-container button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
</style>
</head>
<body>
<form method="post" action="save1.php">
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
<div class="form-container">
            <h2>PG Courses Enrollment Form</h2>
            <form action="process_form.php" method="post" enctype="multipart/form-data">
                 <table class=st>

<tr><td><label>First Name</label></td>
<td><input name=fn type=text placeholder="enter first name" id="First Name" ><i class='bx bxs-user'></i><tr>
<td><label>Last Name</label></td>
<td><input name=ln type=text placeholder="enter last name" ><i class='bx bxs-user'></i></tr>
<tr><td><label>DOB</label></td>
<td><input name=db type=date></tr>
<tr><td><label>Email</label></td>
<td><input name=em type=email><i class='bx bxs-envelope'></i></tr>
<tr><td><label>Password</label></td>
<td><input name=ps type=password><i class='bx bxs-lock-alt'></i></tr>
<tr><td><label>Mobile no</label></td>
<td><input name=mn type=number><i class='bx bxs-lock-alt'></i></tr>
<tr><td><label>UG PERCENTAGE</label></td>
<td><input name=mm type=number><i class='bx bxs-lock-alt'></i></tr>



<tr><td><label>Religion</label></td>
<td><input name=re type=text></i></tr>

<tr><td>
COURSES</td><td>
<select name=ca>
<option>select</option>
<option>TAMIL</option>
<option>ENGLISH</option>
<option>COMPUTER SCIENCE</option>
<option>IT</option>
<option>FASHION TEC</option>
</select></td>
</tr>
<tr><td>
GENDER
<td>MALE<input type="radio" name=gender>
FEMALE<input type="radio" name=gender>
TRANSGENDER<input type="radio" name=gender>
</td>
</tr>
<tr>
<td>Address<td>
<textarea name=ta></textarea><i class='bx bx-location-plus' ></i></tr><tr><td>
HOBBIES<td><br>
<input type=checkbox name=hob>NSS
<input type=checkbox name=hob>RRC
<input type=checkbox name=hob>NCC
<input type=checkbox name=hob>SPORTS

</tr>
<br>
<div><br><BR><center>
<tr><td colspan="2"><input class="txt" type="submit" value="save">




            </form>
        </div>
    </div>
</center>
</body>
</html>