<!DOCTYPE HTML>
<html>
   <head>
   <title>Harjutus4</title>
	 <meta http-equiv="Content-Type" content="text/html;
   charset=utf-8">
   <title>Andmetüübid (2)</title>
	 </head>
   <body>
		<h2>Arvutamine murd- ja täisarvudega</h2>
			<?php echo $float = 3.14; ?><br>
			<?php echo $float + 7; ?><br>
			<?php echo 4/3; ?><br>
		<h2>Murdarvude ümardamine</h2>
      			<?php echo round($float, 1); ?><br>
      			<?php echo ceil($float); ?><br>
			 <?php echo floor($float); ?>
		<h2>Andmetüübi funktsioonid</h2>
      			<?php $integer = 3; ?><br>
      			<?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>
      			<?php echo "Kas {$float} on integer? " . is_int($float); ?><br>
      			<?php echo "Kas {$integer} on float? " . is_float($integer); ?><br>
      			<?php echo "Kas {$float} on float? " . is_float($float); ?><br>
      			<?php echo "Kas {$integer} on number? " . is_numeric($integer); ?><br>
      			<?php echo "Kas {$float} on number? " . is_numeric($float); ?>
   </body>

</html>
