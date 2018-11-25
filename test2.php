<html>
  <body>
    This text right here (or any HTML I want to write) will show up just before the PHP code stuff.
    <p>
      <?php
      // first, this $PHP_SELF thang is
      // an environment variable that'll show the
      // path from your root folder to this
      // document itself, like /webmonkey_article/test3.php.
      // I put this in just for fun.
      // NOTE: This may only work if your server is Apache.
      print "$PHP_SELF";
      // next we have to "print" any
      // HTML code we want the browser
      // to follow to determine
      // the layout of the results page.
      // In this case, we're adding a <p> tag
      // the <p> tags could have been put
      // inside the same print statement as the
      // "I am the CHICKEN MAN" text.
      // between the $PHP_SELF text and the
      // next bunch of stuff.
      print ("<p>");
      print ("I am the CHICKEN MAN");
      print ("<p>");
      /* This next "phpinfo" business outputs a long page that tells you exactly how your version of PHP is configured. This can be useful when troubleshooting problems down the road */
      phpinfo();
      ?>
    </p>
  </body>
</html>
