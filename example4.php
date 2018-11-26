<html>
  <head>
    <title>Pet Arrays</title>
  </head>
  <body>
    <?php
      $animals = array ( array ( name => "Phoebe", type => "dog", color => "grey and white", age => 7 ), array ( name => "Ruby", type => "dog", color => "brown and white", age =>7 ), array ( name => "Rotty", type => "squirrel", color => "grey", age =>2 ), array ( name => "Opie", type => "cat", color => "grey tabby", age => 5 ) );
      print $animals[2]["type"];
      print ("<br>");
      print $animals[3]["color"];
    ?>
  </body>
</html>
