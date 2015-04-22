<?php
	header("Content-Type: text/css");
?>
/*
	Anthony T
	Created On: April 18, 2015
	Because i'm lazy
	Iteration Count: <?php echo $_GET["count"] ?>
	
	Date: <?php echo date("F j, Y, g:i a") ?>
	
*/


<?php
	for($i=0; $i<intval($_GET["count"]); $i++) {
		$j = $i+1;
		echo ".stagger:nth-child($j) {\n" .
			"\t-webkit-transition: transform 425ms " . (75 * $i) . "ms;\n" .
			"\ttransition: transform 425ms " . (75 * $i) . "ms;\n" .
		"}\n" .

		".sampleList.current .stagger:nth-child($j) {\n" .
			"\t-webkit-transition-delay: " . (450 + (75 * $i)) . "ms;\n" .
			"\ttransition-delay: " . (450 + (75 * $i)) . "ms;\n" .
		"}\n\n\n";
	}
?>