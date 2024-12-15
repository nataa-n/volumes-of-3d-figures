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
	<title>Cone segment</title>
</head>
<body>
<header>Cone segment</header>
<main>
    <p id="formula">V=((πR<sup>2</sup>l)/3)-(π(R-h/tgL)<sup>2</sup> (l-h))/3</p>
    <div id="figure_content">
		<form action="<?php	$theme ?>" method="POST">
		<div id="sizes"><div id="first_part">L =</div><div id="second_part"><input type="number" name="ll" class="number_input"></div></div> 
		<div id="sizes"><div id="first_part">R =</div><div id="second_part"><input type="number" name="r" class="number_input"></div></div> 
		<div id="sizes"><div id="first_part">l =</div><div id="second_part"><input type="number" name="l" class="number_input"></div></div> 
		<div id="sizes"><div id="first_part">h =</div><div id="second_part"><input type="number" name="h" class="number_input"></div></div> 
    </div>
	<input class="content_button" name="knopka" value="Calculate" type="submit" style="font-style: normal; font-weight: bold; font-size: 14px; line-height: 19px; display: flex;align-items: center; color: #000000; text-align: center; display: block;
    width: 60%;  padding: 0 auto; cursor:pointer;">
    </form>
    </main> 

<?
$ll=0;
$r=0;
$l=0;
$h=0;
$v=0;
if($_POST){
	$ll=$_POST['ll'];
	$r=$_POST['r'];
	$l=$_POST['l'];
	$h=$_POST['h'];
	$s=(pi()*$r*$r*$l)/3;
	$y=pi()*$r-$h/tan($ll)*pi()*$r-$h/tan($ll)*($l-$h);
	$w=$s-$y;
	$v=$w/3;
}
echo '<div><img src="images/cone segment.png" id="img_figures"></div>';
echo '<footer>';
echo     '<div id="result">Result:<br>V = '.$v.'</div>';
echo     '<div id="mode">Dark mode';
echo     '<label class="switch">';
	if($theme==1){
		echo"<a href='http://host514.itelit.pro/3d/Cone segment.php?theme=2'>";
	}else{
		echo"<a href='http://host514.itelit.pro/3d/Cone segment.php?theme=1'>";
	}
echo       '<input type="checkbox">';
echo       '<span class="slider round"></span>';
echo     '</label></a></div>';
echo '</footer>';
echo '</body>';
?>
</html>