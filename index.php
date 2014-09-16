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
      <?php echo 4/3; ?>
    <h2>Murdarvude ümardamine</h2>
      <?php echo round($float, 1); ?><br>
      <?php echo ceil($float); ?><br>
      <?php echo floor($float); ?>
    <h2>Andmetüübi funktsioonid</h2>
      <?php $integer = 3; ?>
      <?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>
      <?php echo "Kas {$float} on integer? " . is_int($float); ?><br>
      <?php echo "Kas {$integer} on float? " . is_float($integer); ?><br>
      <?php echo "Kas {$float} on float? " . is_float($float); ?><br>
      <?php echo "Kas {$integer} on number? " . is_numeric($integer); ?><br>
      <?php echo "Kas {$float} on number? " . is_numeric($float); ?>
    <h2>Jadad (array)</h2>
      <?php $numbers = array(4, 8, 15, 16, 23, 42); ?>
      <?php echo $numbers[1]; ?><br>
      <?php echo $numbers[0]; ?><br>
      <?php echo $numbers[2]; ?><br>
      <?php echo $numbers[3]; ?><br>
      <?php echo $numbers[4]; ?><br>
      <?php echo $numbers[5]; ?><br>
      <?php $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z")); ?>
      <?php echo $mixed[2]; ?><br>
      <?php echo $mixed[4][2]; ?><br>
      <?php $mixed[2] = "kass"; ?>
      <?php $mixed[5] = "kass"; ?>
      <?php $mixed[] = "hobune"; ?>
    <pre>
      <?php echo print_r($mixed); ?>
    </pre>
    <h2>Associative arrays</h2>
      <?php $assoc = array("first_name" => "Joosep", "last_name" => "Vähi"); ?>
      <?php echo $assoc["first_name"] ?>
      <?php echo $assoc["last_name"] ?><br>
      <?php $numbers = array(0 => 4, 5 => 8, 6 => 15, 9 => 16, 10 => 23, 15 => 42); ?>
      <?php $assoc["age"] = 27; ?>
      <?php $assoc["first_name"] = "Tõnis" ?>
      <?php echo $assoc["first_name"] ?>
      <?php echo $assoc["last_name"] ?><br>
      <?php $assoc["e-mail"] = "t6nis.v2hi@gmail.com"; ?>
      <?php echo "Minu nimi on {$assoc["first_name"]}{$assoc["last_name"]}. Minu e-post on {$assoc["e-mail"]}."; ?>

    
   </body>

</html>
