<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exercicio repeticao</title>
</head>
<body>
 <form method="post">
 	<label for="valor1">valor</label>
 	<input type="number" name="valor1" id="">
 	<br>
 	
 	<br>
 	<button type="submit">enviar</button>
 	<br>


 <?php
	if($_POST)  {
		$valor1 = $_POST['valor1'];
		switch ($valor1) {
			case 1 :
				echo "voce esta na tabuada do: " . $valor1 ;
				echo '<br>';
		}

		for($i = 1; $i <= 10; $i++){
			echo $valor1 . " X " . $i . " = " . $valor1 * $i;
			echo '<br>';
		}
	
	}
?>


 </form>
</body>
</html>


