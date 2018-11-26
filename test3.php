<html lang="en" dir="ltr">
  <body>
    <?php
      // Test Statements
      print("<h1>");
      print("My Practice Page");
      print("</h1>");
      // print("<p>Yes?</p>");

      // Test Array
      $critters[] = "Phoebe";
      $critters[] = "Ruby";
      // print($critters[0]);
      // print($critters[1]);
      $dog = array( name=>"Phoebe", description=>"Fat", age=>7);
      // print($dog[description]);
      $dog[personality] = "Dumb";
      // print($dog[personality]);

      //Test if/else
      $color = "yellow";
      if($color == "blue"){
        print("I like blue too!");
      } else {
        // print( "You don't like blue?!  Crazy fool!");
      }

      //For Each
      $arr = [2, 4, 6, 8];
      foreach($arr as $key => $value){
        // echo "{$key} => {$value} ";
        // print_r($arr);
        // print("<br />");
      }

      foreach($arr as $v){
        // echo "Current value of \$arr: $v.\n";
      }

      //Functions
      

    ?>
  </body>
</html>
