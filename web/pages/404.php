<?php

http_response_code(404);
echo Siler\Twig\render('pages/404.twig');

?>
<pre>
  <?php var_dump($_SERVER) ?>
</pre>
<?php exit ?>
