<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_next_light.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="images/2.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">
    <?php
		$theme=1;
		$theme=$_GET["theme"];

		if($theme==1){
			echo"<link rel='stylesheet' type='text/css' href='style_next_light.css'>";
		}else{
			echo"<link rel='stylesheet' type='text/css' href='style_next_dark_theme.css'>";
		}
	?>
	<title>Capsule</title>
</head>
<body>
<header>Capsule</header>
<main>
    <p id="formula">V = πr<sup>2</sup>((4/3)r + a)</p>
    <div id="figure_content">
        <form action="<?php	$theme ?>" method="POST">
		<div id="sizes"><div id="first_part">r =</div><div id="second_part"><input type="number" name="r" class="number_input"></div></div> 
		<div id="sizes"><div id="first_part">a =</div><div id="second_part"><input type="number" name="h" class="number_input"></div></div> 
    </div>
	<input class="content_button" name="knopka" value="Calculate" type="submit" style="font-style: normal; font-weight: bold; font-size: 14px; line-height: 19px; display: flex;align-items: center; color: #000000; text-align: center; display: block;
    width: 60%;  padding: 0 auto; cursor:pointer;">
    </form>
    </main> 
<?
$r=0;
$a=0;
$v=0;
if($_POST){
	$r=$_POST['r'];
	$h=$_POST['h'];
	$v=pi()*$r*$r*((4/3)*$r+$a);
}
echo '<div><img src="images/capsule.png" id="img_figures"></div>';
echo '<footer>';
echo     '<div id="result">Result:<br>V = '.$v.'</div>';
echo     '<div id="mode">Dark mode';
echo     '<label class="switch">';
	if($theme==1){
		echo"<a href='http://host514.itelit.pro/3d/Capsule.php?theme=2'>";
	}else{
		echo"<a href='http://host514.itelit.pro/3d/Capsule.php?theme=1'>";
	}
echo       '<input type="checkbox">';
echo       '<span class="slider round"></span>';
echo     '</label></a></div>';
echo '</footer>';
echo '</body>';
?>
</html>