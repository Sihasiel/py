<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                        #|
#|          S             #|
#|                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|
if isset($_GET['username'])
{
}
else
{
  echo 'no session found';
}
$useragent = array ('ie');
  if ($_server['HTTP_USER_AGENT'] == $useragent)
  {
    echo "$_GET['username'] , le navigateur ie à été rejeté ";
    
  }
 
?>
