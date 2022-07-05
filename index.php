<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Learning PHP</title>
</head>
<body>
   <?php
      echo "hello world";
      echo "<br> ========================= <br>";
      $num1 = 0;
      var_dump($num1);
      echo "<br> ========================= <br>";

      settype($num1,"bool");
      echo gettype($num1);
      
      function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
      {
         $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
         return "Making a cup of ".join(", ", $types)." with $device.\n";
      }
      echo makecoffee();
      echo makecoffee(array("cappuccino", "lavazza"), "teapot");

      
      $test = "hello world";
      $test[20] = "a";
      echo $test;
      echo "<br>" . $test[19];


      $print_something = fn() => 
      "hello from arrow function <br>";
      $test;
      
      echo $print_something();
      
      //string functions
      echo strlen(trim("           hello            " ));

      echo "<br> ========================= <br>";

      str_pad("hello",8,"*");

      echo "<br> ========================= <br>";

      echo str_pad("hello",8,"*");


      echo "<br> ========================= <br>";

      str_pad("hello",8,"*");

      echo "<br> ========================= <br>";

      echo str_shuffle("hello world");

      echo "<br> ========================= <br>";

      echo str_shuffle("hello world");

      echo "<br> ========================= <br>";
      
      echo wordwrap("hello world from TTPHPT",6 ,"<br>");
      
      echo "<br> ========================= <br>";
      
      echo similar_text("hello","hellloo");
      
      echo "<br> ========================= <br>";
      
      echo similar_text("hello","hellooll",$percent);
      
      echo "<br> ========================= <br>";
      
      echo $percent;
      
      echo "<br> ========================= <br>";
      
      //Array functions
      
      $friends_key = ['EG' => "Ahmed", "SA" => "Mohamed", "US" => "sam","SD" => "Ahmed"];
      
      echo "<pre>";
      
      print_r(array_pad($friends_key,5,"*"));
      
      echo "</pre>";
      
      echo "<pre>";
      
      print_r(array_keys($friends_key,"Ahmed"));
      
      echo "</pre>";
      
      echo "<br> ========================= <br>";
      
      $sort_arr = ["A" => "Ahmed", "M" => "Mohamed", "S" => "Shams", "M" => "Momen"];
      
      sort($sort_arr);
      echo "<pre>";
      
      print_r($sort_arr);
      
      echo "</pre>";
      
      echo "<br> ========================= <br>";
      
      rsort($sort_arr);
      
      echo "<pre>";
      
      print_r($sort_arr);
      
      echo "</pre>";


      
   ?>
   
      <script src="test.js"></script>
</body>
</html>