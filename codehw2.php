<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='w2style.css'/>
		<title>Code HW2</title>
	</head>
	<body>
    <h1>Challenge: ISBN Validation</h2>
    	<?php
      $isbn = 9992158107;
      /* sum of isbn code,
      * $isbn : isbn code
      * $len  : length of  isbn*/
      function isbn_sum($isbn, $len) {
	       $sum = 0;
	        if ($len == 10){
		           for ($i = 0; $i < $len-1; $i++){
			         $sum = $sum + (int)$isbn[$i] * ($len - $i);
		           }
             }
	             return $sum;
             }
             echo "Checkinf isbn " . $isbn . " for validity...";
             //%11//
             function isbn_compute($isbn, $len){
		            $digit = 11 - isbn_sum($isbn, $len) % 11;
              }
                if ($digit == 0);{
                echo "This is a valid ISBN.";
              }
              else{
                  echo "This is NOT a valid ISBN";
                }
      ?>
      <?php
      echo "Flipping a coin 1 time...";
      echo "<br>";
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      echo "<br>";
      }
      echo "<br>";
      echo "Flipping a coin 3 time...";
      echo "<br>";
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      echo "<br>";
      echo "Flipping a coin 5 time...";
      echo "<br>";
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      echo "<br>";
      echo "Flipping a coin 7 time...";
      echo "<br>";
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      echo "<br>";
      echo "Flipping a coin 9 time...";
      echo "<br>";
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";

      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      }
      $headCount = mt_rand(0,1);
      if ($headCount == 0) {
      echo "<img src=\"H.jpg\">";
      }
      else {
      echo "<img src=\"T.jpg\">";
      echo "<br>";
      }
      ?>

      <h1>We are going to flip a coin until we get Two heads in a row!</h1>
      <?php
      $headCount = 0;
      $flipCount = 0;
      while ($headCount < 2) {
        $flip = mt_rand(0,1);
        $flipCount ++;
        if ($flip){
          $headCount ++;
          echo "<img src=\"H.jpg\">";
        }
        else {
            $headCount = 0;
            echo "<img src=\"T.jpg\">";
          }
        }
        echo "<br>";
        echo "Flipped TWO heads in a row, in {$flipCount} flips!";
?>
    </body>
</html>