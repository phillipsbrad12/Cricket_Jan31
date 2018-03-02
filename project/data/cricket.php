<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../images/checks3_mario.ico" />															   
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Cricket score keeper</title>
<meta name="Keywords" content="darts, cricket, score, board, scorekeeping, scoreboard, keeping">
<meta name="Description" content="Simple cricket score board.">
<!--
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;"/>
<meta name="viewport" content="height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
-->
<meta name="viewport" content="width=device-width, initial-scale=1.0;">


<script language="JavaScript" src="fastclick.js" type="text/javascript"></script>
<script language="JavaScript" src="common.js" type="text/javascript"></script>
<script language="JavaScript" src="cricket.js" type="text/javascript"></script>

<link href="cricket.css" rel="stylesheet" type="text/css">





<!--
<link media="only screen and (device-width: 320px or device-width:480px)" href="../style.css" type="text/css" rel="stylesheet" charset="utf-8">
<meta name="viewport" content="width=320" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<!-- Javascript Base
	================================================== -->
<script src="../scripts/common.js" type="text/javascript" charset="utf-8"></script>
</head>
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<button id="submit_score" class="buttonPush" onClick="">Submit Score</button>
<div id="checkGrid">
	<div class="chartCellNames">
 	<!--form action="../service/welcome_php.php" method="get">
		Name: <input type="text" name="name"><br>
		<input type="submit">
	</form-->
		<input name="p1_name2" type="text" class="names" id="p1_name2" value="Brad">
		<input name="p1_name2" type="text" class="names" id="p1_name2" value="Ryan">
	</div>
	<div class="chartCell">
		<div id="p1_cell_20" class="checkImageWrapper" onClick="doScore(20, 'p1')"><img src="../images/checks0.png" class="checkImages" id="p1_i_20"></div>
		<div class="numbers">20</div>
		<div id="p2_cell_20" class="checkImageWrapper" onClick="doScore(20, 'p2')"><img src="../images/checks0.png" class="checkImages" id="p2_i_20"></div>
	</div>
	<div class="chartCell">
		<div id="p1_cell_19" class="checkImageWrapper" onClick="doScore(19, 'p1')"><img src="../images/checks0.png" class="checkImages" id="p1_i_19"></div>
		<div class="numbers">19</div>
		<div id="p2_cell_19" class="checkImageWrapper" onClick="doScore(19, 'p2')"><img src="../images/checks0.png" class="checkImages" id="p2_i_19"></div>
	</div>
	<div class="chartCell">
		<div id="p1_cell_18" class="checkImageWrapper" onClick="doScore(18, 'p1')"><img src="../images/checks0.png" class="checkImages" id="p1_i_18"></div>
		<div class="numbers">18</div>
		<div id="p2_cell_18" class="checkImageWrapper" onClick="doScore(18, 'p2')"><img src="../images/checks0.png" class="checkImages" id="p2_i_18"></div>
	</div>
	<div class="chartCell">
		<div id="p1_cell_17" class="checkImageWrapper" onClick="doScore(17, 'p1')"><img src="../images/checks0.png" class="checkImages" id="p1_i_17"></div>
		<div class="numbers">17</div>
		<div id="p2_cell_17" class="checkImageWrapper" onClick="doScore(17, 'p2')"><img src="../images/checks0.png" class="checkImages" id="p2_i_17"></div>
	</div>
	<div class="chartCell">
		<div id="p1_cell_16" class="checkImageWrapper" onClick="doScore(16, 'p1')"><img src="../images/checks0.png" class="checkImages" id="p1_i_16"></div>
		<div class="numbers">16</div>
		<div id="p2_cell_16" class="checkImageWrapper" onClick="doScore(16, 'p2')"><img src="../images/checks0.png" class="checkImages" id="p2_i_16"></div>
	</div>
	<div class="chartCell">
		<div id="p1_cell_15" class="checkImageWrapper" onClick="doScore(15, 'p1')"><img src="../images/checks0.png" class="checkImages" id="p1_i_15"></div>
		<div class="numbers">15</div>
		<div id="p2_cell_15" class="checkImageWrapper" onClick="doScore(15, 'p2')"><img src="../images/checks0.png" class="checkImages" id="p2_i_15"></div>
	</div>
	<div class="chartCell">
		<div id="p1_cell_25" class="checkImageWrapper" onClick="doScore(25, 'p1')"><img src="../images/checks0.png" class="checkImages" id="p1_i_25"></div>
		<div class="numbers">B</div>
		<div id="p2_cell_25" class="checkImageWrapper" onClick="doScore(25, 'p2')"><img src="../images/checks0.png" class="checkImages" id="p2_i_25"></div>
	</div>
	<div class="chartCellScore">
		<div class="score" id="player1score">0</div>
		<div class="score" id="toggleMode" onClick="toggleMode()"><img src="../images/toggleMath_add.png" name="toggleMathButton" width="30" height="30" id="toggleMathButton"></div>
		<div class="score" id="player2score">0</div>
	</div>
	<div class="chartCellNames">
		<form id="gameDropDown">
			<!--input name="game_name" type="text" class="gameNames" id="game_name" value="Regular Cricket"-->
			<select id="gameDropDown" class="gameNames">
				<option class="gameOption">Regular</option>
				<option class="gameOption">Small</option>
				<option class="gameOption">Inner</option>
				<option class="gameOption">Outer</option>
			</select>
		</form>
		<form id="spinDropDown" class="">
			<!--input name="game_name" type="text" class="gameNames" id="game_name" value="Regular Cricket"-->
			<select id="spinSelect"class="gameNames">
				<option class="gameOption">20</option>
				<option class="gameOption">19</option>
				<option class="gameOption">18</option>
				<option class="gameOption">17</option>
				<option class="gameOption">16</option>
				<option class="gameOption">15</option>
				<option class="gameOption">14</option>
				<option class="gameOption">13</option>
				<option class="gameOption">12</option>
				<option class="gameOption">11</option>
				<option class="gameOption">10</option>
				<option class="gameOption">9</option>
				<option class="gameOption">8</option>
				<option class="gameOption">7</option>
				<option class="gameOption">6</option>
				<option class="gameOption">5</option>
				<option class="gameOption">4</option>
				<option class="gameOption">3</option>
				<option class="gameOption">2</option>
				<option class="gameOption">1</option>				
			</select>
		</form>					  
	</div>
	<div>
		<button id="spin_board" class="spinButtonPush" onClick="spinBoardWrapper()">Spin Board!</button>
		<button id="reset_form" class="resetButton" onClick="resetForm()">RESET</button>
	</div>
<!--div style="clear:both">&nbsp;<p>&nbsp;</p></div-->

</body>

</html>
