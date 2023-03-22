<?php
$my_names = "";
$s_description = "";
$get_variable = "";
$what_are_you = "";
$year = "";
$univ = "";
$course = "";
$email = "";
$website = "";
$prog = "";
$phone_number  = "";
$g_designing = "";  
$get_image = "";
$web = "";
$image_var = "";
if(isset($_GET['sub'])) {
$my_names = $_GET['my_names'];
$what_are_you = $_GET['what_are_you'];
$get_variable = $_GET['category'];
$year = $_GET['year'];
$univ = $_GET['university'];
$course = $_GET['course'];
$s_description = $_GET['self_description'];
$email = $_GET['email'];
$website = $_GET['website'];
$phone_number = $_GET['phone_number'];
$prog = $_GET['programming'];
$g_designing = $_GET['graphics_designing'];
$web = $_GET['editing'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css"/>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Students form data</title>
</head>
<body>
	<div class="first_con">
		<div class="large_containing">
		<div class="large_con">
			<div class="image_con">
				<div class="profile_img" style="margin-block-end: 30px;">
			    <img src="">
				</div>
				<div class="name_and_title" style="border-radius: 30px;">
					<h1><?php if(isset($my_names)): ?><?php echo $my_names; ?><?php endif; ?></h1>
					<p><?php if(isset($what_are_you)): ?><?php echo $what_are_you; ?><?php endif; ?></p>
				</div>
			</div>
			<div class="line_box">
				<h1><?php if(isset($get_variable)): ?><?php echo $get_variable; ?><?php endif; ?></h1>
			</div>
			<div class="box_con">
				<div class="date_con">
					<h1><?php if(isset($year)): ?><?php echo $year; ?><?php endif; ?></h1>
					<p><?php if(isset($univ)): ?><?php echo $univ; ?><?php endif; ?></p>
				</div>
				<div class="degree_info">
					<h1><?php if(isset($course)): ?><?php echo $course; ?><?php endif; ?></h1>
					<p><?php if(isset($s_description)): ?><?php echo $s_description; ?><?php endif; ?></p>
				</div>
			</div>
		</div>
		<div class="left_con">
         <div class="box">
         	<p>CONTACT ME</p>
         </div>
         <div class="contact_items">
         	<div class="con_items">
         	<h1><i class="fa fa-envelope"></i> EMAIL</h1>
         	<p><?php if(isset($email)): ?><?php echo $email; ?><?php endif; ?></p>
         </div>
         <div class="con_items" style="margin-top: 50px;">
         	<h1><i class="fa fa-globe"></i> WEBSITE</h1>
         	<p><?php if(isset($website)): ?><?php echo $website; ?><?php endif; ?></p>
         </div>
           <div class="con_items" style="margin-top: 50px;">
         	<h1><i class="fa fa-phone"></i> PHONE</h1>
         	<p><?php if(isset($phone_number)): ?><?php echo $phone_number; ?><?php endif; ?></p>
         </div>
         <div class="skills">
         	<div class="box1">
         		<p>SKILLS</p>
         	</div>
         	<ul>
         		<li><?php if(isset($prog)): ?><?php echo $prog; ?><?php endif; ?></li>
         		<li><?php if(isset($g_designing)): ?><?php echo $g_designing; ?><?php endif; ?></li>
         		<li><?php if(isset($web)): ?><?php echo $web; ?><?php endif; ?></li>
         	</ul>
         </div>
         <div class="links">
         	<div class="link1">
         		<h1><i class="fa fa-linkedin" id="i"></i></h1>
         	</div>
         	<div class="link1">
         		<h1><i class="fa fa-youtube" id="i"></i></h1>
         	</div>
         	<div class="link1">
         		<h1><i class="fa fa-whatsapp" id="i"></i></h1>
         	</div>
         </div>
         </div>
		</div>
	</div>
		
	</div>

</body>
</html>

<style type="text/css">


</style>
