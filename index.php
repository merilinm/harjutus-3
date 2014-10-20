<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-3 - Andmetüübid</title>
</head>

<body>
    <h2>Muutujad</h2>
    <?php
    $variable = 90;
    echo $variable;
    // Lisan veebilehitsejas parema loetavuse saamiseks reamurdmise elemendi:
    echo "<br>";
    $variable = 40;
    echo $variable;
    echo "<br>";
    $variable = 24;
    echo $variable;
    echo "<br>";
    $variable = 26;
    echo $variable;
    ?>
	<h2>Stringid</h2>
	<?php 
	echo "Hello world!<br>";
	echo 'Goodbye world!<br>';
	echo "2426";
	?>
	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
	<?php
	$student1 = "Anu";
	$student2 = "Ants";
	$student3 = "Anne";
	$student4 = "Annika";
	$student5 = "Anneli";
	$firstname = "Merilin";
	$lastname = "Metsamaa";
	$fullname = "Merilin" . " Metsamaa";
	?>
	<ul>
		<?php
		echo "<li> $student1</li>";	
		echo "<li>$student2</li>";
		echo "<li>$student3</li>";
		echo "<li>$student4</li>";
		echo "<li>$student5</li>";
		echo "<li>$fullname</li>";
		?>
	</ul>
</body>
</html>