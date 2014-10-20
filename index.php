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
		echo "<li>$student1</li>";	
		echo "<li>$student2</li>";
		echo "<li>$student3</li>";
		echo "<li>$student4</li>";
		echo "<li>$student5</li>";
		echo "<li>$fullname</li>";
	?>
	</ul>
	<h2>Stringi interpolatsioon</h2>
	<?php
		$test = "Testing";
		echo "$test testing yks kaks kolm <br>";
		$katse = "proov";
		echo "Me peame {$katse}ima, kas ka nii saab.";
	?>
	<h2>Stringi funktsioonid</h2>
	<?php
		$source = "this text CONTAINS LETTERS!!";
		$lower = strtolower($source);
		echo "<p>{$lower}</p>";

		$source = "this text CONTAINS LETTERS!!";
		$upper = strtoupper($source);
		echo "<p>{$upper}</p>";

		$source = "this text contains letters!!";
		$first = ucfirst($source);
		echo "<p>{$first}</p>";

		$source = "this text contains letters!!";
		$words = ucwords($source);
		echo "<p>{$words}</p>";

		$source = "this text contains letters!!";
		$length = strlen($source);
		echo "<p>{$length}</p>";

		echo "A" . trim(" B C D E") . "F";
	?>
	<h2>Täisarvud</h2>
	<?php
		$nr1 = 4;
		$nr2 = 16;

		echo (4 + 16)*2;
		echo "<br>";

		echo abs(-500);
		echo "<br>";

		// Kolm kuubis:
   		echo pow(3, 3);
   		echo "<br>";

   		// Üheksa ruudus:
    	echo pow(9, 2);
    	echo "<br>";

   		// Neli astmel viis:
   		echo pow(4, 5);
   		echo "<br>";

   		// Ruutjuur 64-st:
    	echo sqrt(64);
    	echo "<br>";

    	// Suvaline number
    	echo rand();

    	// Lihtsalt reavahetus, et vältida segadust piiranguteta ja piiranguga numbritel vahet tegemisel.
    	echo "<br>";

    	// Suvaline number vahemikus 2 - 100:
    	echo rand(2, 100);

    	// Numbrite kasvatamine ja kahandamine
    	$sample_nr = 45;
    	echo "<br>";

    	// 5 võrra kasvatamine (variant1)
    	$sample_nr = 45;
  		$sample_nr = $sample_nr + 5;
 		echo $sample_nr;
 		echo "<br>";

    	// 5 võrra kasvatamine (variant2)
	    $sample_nr2 = 45;
    	$sample_nr2 += 5;
    	echo $sample_nr2;
    	echo "<br>";

    	// 5 võrra kahandamine 
    	$sample_nr2 = 45;
    	$sample_nr2 -= 5;
    	echo $sample_nr2;
    	echo "<br>";

    	// Korrutamine ja jagamine
    	$sample_nr3 = 45;
    	$sample_nr3 *= 5;
  		echo $sample_nr3;
  		echo "<br>";

    	$sample_nr2 = 45;
    	$sample_nr2 /= 5;
    	echo $sample_nr2;
	?>
	<h2>Numbri ja stringi liitmine</h2>
	<?php
		echo 5 . " teksapüksid";
		echo "<br>";

		// Matemaatiline liitmine
		echo 5 + " teksapüksid";
		echo "<br>";

		// Kui string sisaldab ainult numbrit
		echo 5 + "5";
		echo "<br>";

		// Kui stringis on selgelt eristatav number, kuid sisaldab ka tähti
		echo 5 + "7 teksapüksi";
	?>
</body>
</html>