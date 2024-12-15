<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="images/2.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">
    <title>3d figures</title>
	<?php
		$theme=1;
		$theme=$_GET["theme"];

		if($theme==1){
			echo"<link rel='stylesheet' type='text/css' href='main.css'>";
		}else{
			echo"<link rel='stylesheet' type='text/css' href='dark_style.css'>";
		}
	?>
</head>
<body>

<header id="header">Volumes of 3d<br>figures
<a href="#mode"><div id="button"><div id="wrapper"><img src="images/arrow.png" id="arrow" align="middle" style="padding-top:25%;"></div>Calculate</div></a></header>
<main>
<div id="mode"  style="display: flex; justify-content: flex-end;"><div>Dark mode</div>
<div><label class="switch">
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/index.php?theme=2'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/index.php?theme=1'>";
		}
	?>
  <input type="checkbox">
  <span class="slider round"></span>
</label></div></a></div>
<div id="content">
<section class="section"><img src="images/1.png" class="content_img"><p class="content_header">Sphere</p><p class="content_formula">V=4/3 πr<sup>3</sup></p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Sphere.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Sphere.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section>
<section class="section"><img src="images/2.png" class="content_img"><p class="content_header">Cube</p><p class="content_formula">V=a<sup>3</sup></p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Cube.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Cube.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section>
<section class="section"><img src="images/3.png" class="content_img"><p class="content_header">Cylinder</p><p class="content_formula">V=πR<sup>2</sup>h</p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Cylinder.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Cylinder.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section>
<section class="section"><img src="images/4.png" class="content_img"><p class="content_header">Cone</p><p class="content_formula">V=πR<sup>2</sup> h/3</p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Cone.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Cone.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section>
<section class="section"><img src="images/5.png" class="content_img"><p class="content_header">Capsule</p><p class="content_formula">V = πr<sup>2</sup>((4/3)r + a)</p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Capsule.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Capsule.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section>
<section class="section"><img src="images/6.png" class="content_img"><p class="content_header">Torus</p><p class="content_formula">V=(πr<sup>2</sup>)(2πR)</p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Torus.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Torus.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section>
<section class="section"><img src="images/7.png" class="content_img"><p class="content_header">Cone segment</p><p class="content_formula">V=((πR<sup>2</sup>l)/3)-(π(R-h/tgL)<sup>2</sup> (l-h))/3 </p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Cone segment.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Cone segment.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section>
<section class="section"><img src="images/8.png" class="content_img"><p class="content_header">Icosahedron</p><p class="content_formula">V =(5(3+√5)/12)a<sup>3</sup></p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Icosahedron.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Icosahedron.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section>
<section class="section"><img src="images/9.png" class="content_img"><p class="content_header">Hollow cylinder</p><p class="content_formula">V=π(R<sup>2</sup> - r<sup>2</sup>)h</p>
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/Hollow cylinder.php?theme=1'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/Hollow cylinder.php?theme=2'>";
		}
	?>
<div class="content_button"><div class="content_calculate">Calculate</div></div></a></section></div>
</main>
<footer id="content_footer">
  <div id="mode2" style="display:inline-flex;">Dark mode
    <label class="switch">
	<?
		if($theme==1){
			echo"<a href='http://host514.itelit.pro/3d/index.php?theme=2'>";
		}else{
			echo"<a href='http://host514.itelit.pro/3d/index.php?theme=1'>";
		}
	?>
      <span class="slider round"></span>
  </label></a></div>
  <div id="content_search">
    <input type="text" name="search" style="color: #BEA89B;" list="datalist" 
	onkeydown = "if (event.keyCode == 13) window.location= this.value + 
	<?php if($theme==1){
	echo "'.php?theme=1'";}
	else{echo "'.php?theme=2'";}?>"
	placeholder="Search" /> <br>
      <datalist id="datalist">
        <option value="Sphere">
        <option value="Cube">
        <option value="Cylinder">
        <option value="Cone">
        <option value="Capsule">
        <option value="Torus">
        <option value="Cone segment">
        <option value="Icosahedron">
        <option value="Hollow cylinder">
      </datalist>
	  </div>
  <div id="content_image_wrapper"><a href="https://t.me/nata_tiff" target="_blank"><img src="images/tg.png" id="content_image" align="middle"></a></div>
</footer>

  </body>
</html> 

</body>
</html>