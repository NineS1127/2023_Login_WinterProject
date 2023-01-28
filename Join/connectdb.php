<?php
  //password hardcode
  $configVars = parse_ini_file('C:\xampp\php\php.ini', TRUE);

  //php.ini file setting
  /* 
  ; Database Settings
  [Database] 
  host=127.0.0.1
  username=root
  passwd=10Pq8q8y8HpX
  dbname=user_db
*/

  $connect = mysqli_connect($configVars['Database']['host'], $configVars['Database']['username'],
                            $configVars['Database']['passwd'], $configVars['Database']['dbname'],)
                            or die("connect failed");

  if (mysqli_connect_errno()) {
    $error_msg = "Connect failed: " + mysqli_connect_error() + "\n";
    error_log ($error_msg, 3, "C:\xampp\apache\logs\error.log");
    exit();
  }

  $connect->set_charset("utf8");
?>
