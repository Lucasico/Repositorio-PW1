<?php
  $ipaddress = $_SERVER['REMOTE_ADDR'];
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  echo "<pre>";
      print_r($ipaddress);
    echo"<br>";
      print_r($useragent);
    echo"<br>";
      print_r($_SERVER);
  echo"</pre>";

?>