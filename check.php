<?php
	session_start();
	$y = str_replace(",", ".", $_GET["y"]);
	$x = $_GET["x"];
    $r = $_GET["r"];
	$pass="false";
    $currentTime = date("H:i:s", strtotime('now'));
    $valid=true;
    $start = microtime(true);
    $check_if_digit=str_replace("-","",str_replace(".","",$y));
    $dig=true;
    for($i=0; $i<strlen($check_if_digit); $i++){
		if(!($check_if_digit[$i]=="0"||
			$check_if_digit[$i]=="1"||
			$check_if_digit[$i]=="2"||
			$check_if_digit[$i]=="3"||
			$check_if_digit[$i]=="4"||
			$check_if_digit[$i]=="5"||
			$check_if_digit[$i]=="6"||
			$check_if_digit[$i]=="7"||
			$check_if_digit[$i]=="8"||
			$check_if_digit[$i]=="9"))
		{
			$dig=false;
		}
	}
    if($y<=-3 || $y>=5 || $y=="(-3...5)" || $y=="" ||$y==null || !is_numeric($y)||!$dig){
		echo "<font color=blue>Y задан некорректно или находится вне заданного<br> интервала (-3...5) или содержит некорректные символы<br></font>";
		$y="nan";
		$pass="false";
		$valid=false;
	}else{
		echo "X=".$x."<br>Y=".$y."<br>R=".$r."<br>";
		if ((($x <= 0 && $y <= 0 && $y >= -$r && $x >= -$r) ||
			($x <= 0 && $y >= 0 && ($x - $y +($r / 2)) >= 0) ||
			($x >= 0 && $y <= 0 && (($x * $x + $y * $y) <= ($r) * ($r) )))&& (is_numeric($y))) 
		{
			echo "<font color=green>Точка лежит в заданной области</font>";
			$pass="true";
		}else{
			echo "<font color=red>Точка не лежит в заданной области</font>";
			$pass="false";
		}
	}

    echo "<br>Текущее время: ".$currentTime;
    echo "<br>Время исполнения: ".(microtime(true) - $start);

		$ar=array(
		"x"=>$x,
		"y"=>$y,
		"r"=>$r,
		"pass"=>$pass,
		"time"=>$currentTime,
		"exec"=>(microtime(true) - $start)
		
		);
		if($valid){
		$_SESSION["i"]=$_SESSION["i"]+1;
		$_SESSION["listResult"][$_SESSION["i"]]=$ar;
	}
?>
