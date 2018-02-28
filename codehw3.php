<!DOCTYPE>
<html>
<head>
  <body>
    <?php
    /*
    Book Data (title, author, number of pages, type, price)
    */

    function build_table($books){
    // start table
    $info = '<table>';
    // header row
    $info .= '<tr>';
    foreach($books[0] as $title=>$data){
            $info .= '<th>' . htmlspecialchars($title) . '</th>';
            $style=' style="background-color: grey;"';
            echo "<table border=\"1\">";
        }
    $info .= '</tr>';

    // data rows
    foreach( $books as $title=>$data){
        $info .= '<tr>';
    foreach($data as $title2=>$data2){
            $info .= '<td>' . htmlspecialchars($data2) . '</td>';
        }
        $info .= '</tr>';
        $style=' style="background-color: grey;"';
        echo "<table border=\"1\">";
    }

    // finish table and return it

    $info .= '</table>';
    return $info;
}
    $books = array(
      	array( 'Title' => "PHP and MySQL Web Development",'First Name' => "Luke", 'Last Name' => "Welling", 'Page' => 144, 'Type' => "Paperback", 'Price' => 31.63),
    	  array( 'Title' => "Web Design with HTML, CSS, JavaScript and jQuery", 'First Name' => "Jon", 'Last Name' => "Duckett", 'Page' => 135, 'type' => "Paperback", 'Price' => 41.23),
        array( 'Title' => "PHP Cookbook: Solutions & Examples for PHP Programmers", 'First Name' => "David", 'Last Name' => "Sklar", 'Page' => 14, 'type' => "Paperback", 'price' => 40.88),
        array( 'Title' => "JavaScript and JQuery: Interactive Front-End Web Development", 'First Name' => "Jon", 'Last Name' => "Duckett", 'Page' => 251, 'type' => "Paperback", "price" => 22.09),
        array( 'Title' => "Modern PHP: New Features and Good Practices", 'First Name' => "Josh", 'Last Name' => " Lockhart", 'Page' => 7, 'Type' => "Paperback", "price" => 28.49),
        array( 'Title' => "Programming PHP", 'First Name' => "Kevin", 'Last Name' => "Tatroe", 'Page' => 26, 'Type' => "Paperback", 'Price' => 28.96),
    );
    echo build_table($books);

    //totle price//
    $price = $books[5];
    $sum=array_sum($price);
    echo "Your total price is " . $sum . ".";
     ?>

     <h1>Coin Toss - Part III</h1>
     <?php
       $coinToss = 8;
       echo "Begginning the coin flipping, looking for " . $coinToss . " in a row.";
       echo "<br>";

       function coinflip($coinToss){
         $headCount = 0;
         $flipCount = 0;
         while ($headCount < $coinToss) {
           $flip = mt_rand(0,1);
           ++$flipCount;
           if ($flip){
             ++ $headCount;
             echo "<img src=\"H.jpg\">";
           }
           else {
               $headCount = 0;
               echo "<img src=\"T.jpg\">";
             }
           }
           return $flipCount;
         }
       $result = coinflip($coinToss);
       echo coinflip($coinToss);
       echo "<br>";
       echo "Flipped {$coinToss} heads in a row, in {$result} flips!";
     ?>
  </body>
</head>
</html>
