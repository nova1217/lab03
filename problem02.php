<html>
  <head>
    <title>problem02
	</title>
  </head>
  <body>
    <?php
         $marks = 25;

    if ($marks >= 90)
     {
         echo "A+";
     }<br>
    else if (($marks >80) && ($marks <90))
      {
         echo "A";
      }<br>
    else if (($marks >70) && ($marks <80))
      {
         echo "B";
      }<br>
    else if ($marks >60 && $marks <70)
      {
         echo "C";
      }<br>

    else echo "F";

     ?>

  </body>
</html>