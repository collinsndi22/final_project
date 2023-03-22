
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Submitting data using get</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<h1 class="h1">SUBMIT THE DATA USING GET METHOD</h1>
<div class="get_form">
<form method="get" action="output.php" class="form" enctype="multipart/form-data">
	<div>
	<label class="label">YOUR NAMES</label>
</div>
	<div>
	<input type="text" name="my_names" placeholder="Full names" class="text_inputs"><br>
</div>
<div><br>
	<label class="label">DESCRIPTION</label>
</div>
	<div>
	<input type="text" name="what_are_you" placeholder="What are you" class="text_inputs"><br>
</div>
<div><br>
	<label class="label">CATEGORY</label>
</div>
	<div>
	<input type="text" name="category" placeholder="Category(Education) or ..." class="text_inputs"><br>
</div>
<div><br>
	<label class="label">YEAR</label>
</div>
	<div>
	<input type="text" name="year" placeholder="Year e.g 2018-2019" class="text_inputs"><br>
</div>
<div><br>
	<label class="label">UNIVERSITY</label>
</div>
	<div>
	<input type="text" name="university" placeholder="University" class="text_inputs"><br>
</div>
<div><br>
	<label class="label">COURSE</label>
</div>
	<div>
	<input type="text" name="course" placeholder="Course" class="text_inputs"><br>
</div>
<div><br>
	<textarea placeholder="Self description" class="text_area" name="self_description"></textarea>
</div>
<div><br>
	<label class="label">EMAIL</label>
</div>
	<div>
	<input type="text" name="email" placeholder="Email" class="text_inputs"><br>
</div>
<div><br>
	<label class="label">WEBSITE</label>
</div>
	<div>
	<input type="text" name="website" placeholder="Website" class="text_inputs"><br>
</div>
<div><br>
	<label class="label">PHONE</label>
</div>
	<div>
	<input type="number" name="phone_number" placeholder="Phone number" class="text_inputs"><br>
</div>
<div><br>
	<label class="label">SKILLS</label>
</div>
	<div>
    <input type="checkbox" name="programming" placeholder="Programming" class="checkbox" value="programming"><label class="label">Programming</label><br>
    <input type="checkbox" name="graphics_designing" placeholder="Graphic" value="graphics designing"><label class="label">Graphic designing</label><br>
    <input type="checkbox" name="editing" placeholder="Video editing" class="checkbox" value="editing"><label class="label">Video editing</label><br>
</div>
<div><br>
	<label class="label">PROFILE PIC</label>
</div>
<div>
	<input type="file" name="image[]" class="text_inputs" style="cursor: pointer; background-color: white;"><br>
</div>
<br><br><br>
</div>
<div class="submit">
	<input type="submit" name="sub" value="SUBMIT" class="text_inputs">
</div>
</form>
</div>
</body>
</html>