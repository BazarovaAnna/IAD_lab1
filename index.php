<?php
	session_start();
	if(!isset($_SESSION["listResult"])){
    $_SESSION["listResult"]=array(); 
	$_SESSION["i"]=0;
	}

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Лабораторная №1</title>

</head>
<style>
	a{
		text-decoration: none;
	}
	table{
		width: 100%;
	}
	table#mainTable{
		font-family: serif-sans;
		text-align: left;
		width: 70%;
		margin: 0 auto;
		padding: 20px;
		background: none repeat scroll 0% 0%;
		background-color: rgb(251, 251, 248);
		border: 1px solid lightblue;
		border-radius: 15px;
	}
	#mainTable td{
		width:25%;
	}

	tr.heading, tr.heading a{
		color: black; /* Цвет символов */ 
		font-family: serif; /* Шрифт serif */ 
		position: relative; /* Относительное позиционирование */ 
		font-size: 20px;
	}

	[blick="on"]:hover, td[blick="on"] a:hover{
		color: blue;
	}
	user agent stylesheet
	body {
		display: block;
		margin: 8px;
	}
	
	@font-face {
		font-family: 'MyFont1';
		src: url('src/fonts/PoiretOne-Regular.ttf') format('truetype');
		font-weight: normal;
		font-style: normal;
	}

	@font-face {
		font-family: 'MyFont2';
		src: url('src/fonts/Margot Fette.ttf') format('truetype');
		font-weight: normal;
		font-style: normal;
	}

	legend{
		color: #0088cc;  
		font-family: MyFont2, MyFont1,Helvetica, PTSansRegular, Arial,  sans-serif;
		font-weight: bold;
	}
	footer{
		position: fixed;
		right: 0; bottom: 0; /* Правый нижний угол */
		padding: 10px; /* Поля вокруг текста */
	}
	.red-border{
		//margin: 20px 20px 20px 20px;
		width:100px;
		height:100px;
		border:1px solid rgba(99, 156, 191, 0.3);
		transition:3s;
		background:rgba(99, 156, 191, 0.3);
 
	}
	.orange-border{
		width:98px;
		height:98px;
		border:1px solid #dff0F8;
		border-radius:50px;
		vertical-align:middle;
		text-align:center;
		transition:2s;
		background:#dff0F8;
	}
	.red-border:hover{
		transform:rotate(-720deg);
	}
	.red-border:hover .orange-border{
		transform:rotateY(-360deg);
	}
	img.ty{
		padding-top: 15%;
		width:70%;
		text-align:center;
		vertical-align:middle;
	}
	.newizo{
		float:left;
	}

	</style>
<body style="background-image: url(http://th13.st.depositphotos.com/1245520/4805/v/170/depositphotos_48058083-Abstract-seamless-background.jpg);">
	<table id="mainTable" cellpadding=10 cellspacing=0 border=0>
		<tr class="heading">
			<th>
				Информация:
				</th>
			<td class="name" blick="on">
				<a href="https://github.com/BazarovaAnna">Базарова А. А.</a>
				</td>
			<td class="group" blick="on">
				P3200
				</td>
			<td class="task_number" blick="on">
				Вариант 18005
				</td>
			</tr>
		<tr><td colspan=4><hr></td></tr>
		<tr>
			<td width=20% rowspan=3>
				<form method="GET">
					<fieldset>
						<legend blick="on" id=90>Выберите X, Y и R:</legend>
					<table>
						X:<br>
						<tr><td align=center>
						-5 <input type = "radio" name = "x" value =  "-5"><br>
						-4 <input type = "radio" name = "x" value =  "-4"><br>
						-3 <input type = "radio" name = "x" value =  "-3" ><br>
						-2 <input type = "radio" name = "x" value =  "-2"><br>
						-1 <input type = "radio" name = "x" value =  "-1"><br></td>
						<td align=center>
						 1 <input type = "radio" name = "x" value =  "1"><br>
						 2 <input type = "radio" name = "x" value =  "2"><br>
						 3 <input type = "radio" name = "x" value =  "3"><br>
						 4 <input type = "radio" name = "x" value =  "4"><br>
						 5 <input type = "radio" name = "x" value =  "5"></td></tr>
						 <tr><td colspan=2 align=center>
						  0 <input type = "radio" name = "x" value =  "0" checked><br></td></tr></table>
					<br><br>
				
					Y: <input type = "text" name = "y" placeholder =  "(-3...5)" id="check" maxlength="9"> <br> <br>
					<hr>
					R: <br>
						<input type = "radio" name = "r" value = "1" checked>1<br>
						<input type = "radio" name = "r" value = "1.5">1.5<br>
						<input type = "radio" name = "r" value = "2">2<br>
						<input type = "radio" name = "r" value = "2.5">2.5<br>
						<input type = "radio" name = "r" value = "3">3<br>
				<br>
				<input type = "submit" name = "submit" value = "Отправить" onclick="checkValue()"></fieldset>
		</form>
				</td>
				<td colspan=3><img src="src/img/zad.png" ></td>
				
			</tr>
			<tr><td><img src="src/img/graf.png" id=111></td><td colspan=2><div class="out">
				<?php
					require_once './out.php';
				?>
			
			
		</table>

	<script src="src/js/valid.js">
	</script>
	</body>
<footer>
	
	<a href="https://se.ifmo.ru">
        <div class="newizo">
		<div class="red-border">
			<div class="orange-border">
				<img src="src/img/itmologo.jpg" class="ty"alt="logo">
			</div>
		</div>
	</div>
    </a>
    ПИП, 2018 г.
	</footer>
</html>
