<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> VGA Audio box image upload</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    

/* ==========================================================================
   Author's custom styles
   ========================================================================== */

body
{
    font-family: 'Open Sans', sans-serif;
}

.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 0px 50px;
    z-index: 9;
    width: 20%; 
}

@media (max-width:768px)
{
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
}
    </style>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 50px;
  background: #fff;
  min-height: 500px;
}
    </style>
</head>
<body>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</div> <!-- /container --> 

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				
				
				<div class="profile-userpic">
			
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
			
					</div>
					<div class="profile-">
						
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					
					<a href=""class="btn btn-danger btn-sm" target="_blank">Message</a>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="http://vga.smtvs.com/imusic-demo/artist-pagemaneger box.php">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
					
						<li>
							<a href="./artist-image-upload-box.php" target="_blank">
							<i class="glyphicon glyphicon-upload"></i>
							Upload Song image</a>
						</li>
						<li>
							<a href="/artist-song-upload-manager.php" target="_blank">
							<i class="glyphicon glyphicon-upload"></i>
							Upload Your  Song </a>
						</li>
					
						
			
								
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>

		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
			   <hr>
<p><br/>




<?php 

if(isset($_FILES['upload'])){
 $target = "./cover_img/".basename($_FILES['upload']['name']) ;
 
  
if(move_uploaded_file($_FILES['upload']['tmp_name'],$target))   echo "Audio uploaded successfully OK! ";
 echo "<form enctype='multipart/form-data' action='artist-image-upload-box.php' method='POST'>";
  echo "File:<input name='upload' type='file'/><input type='submit' value='Upload Image'/>";
  echo "</form>";

}
 else{
  echo "<form enctype='multipart/form-data' action='artist-song-upload-box.php' method='POST'>";
  echo "File:<input name='upload' type='file'/><input type='submit' value='Upload Image'/>";

  echo "</form>";
 }
  ?> 
<hr>
<p>

			      <?php  
#define $user_dir;		
   
   $user_dir = "imusic-demo/"
    ?> 	
    
      
         <?php 


$domain = $_SERVER['HTTP_HOST'];

$dir = "cover_img/";


if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($filename = readdir($dh)) !== false) {
            if ($filename[0]!= "." && $filename[0]!= ".." )
             {
                echo "<div class='image'>";
                echo "<a href='$dir$filename'><img src='$dir$filename'width='200'></a>";
                echo "Image URL :&nbsp;";                
                echo "<input value=\"http://";  
				echo "$domain/$user_dir$dir$filename \"";				
				echo 'size=\"50\" onclick=\"select_all(this)\">';
				
				echo "&nbsp;<a href=\"delete.?f=$filename\" onclick=\"return confirm('Are you sure you want to delete?')\" >Delete</a>";
				  echo "<p>";  
				  echo "<TextArea  rows=\"2\" cols=\"70\"><img src='http://$domain/imusic/cover_img/$filename'width='200'></TextArea>"; 
				    echo "</div><hr><p>";     
                          }
        }
       closedir($dh);
   }
}





?>

  
            </div>
		</div>
	</div>
	
</div>
<center>
	<script type="text/javascript">
	
	</script>
</body>
</html>
