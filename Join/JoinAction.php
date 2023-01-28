<?php
function dataRecording() {
  $arr = [];
  $arr[0] = $_POST['ID'];
  $arr[1] = $_POST['PASSWORD'];
  $arr[2] = $_POST['Name'];
  $arr[3] = $_POST['Email'];

  include("./connectdb.php");

    $sql = "INSERT INTO member (id, pwd, name, email, available)
  VALUES ('$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', 1)";

  if (!mysqli_query($connect, $sql)) {
    $error_msg = "Errormessage: " + mysqli_error($link) + "\n";
    error_log ($error_msg, 3, "C:\xampp\apache\logs\error.log");
  }

  mysqli_close($connect);
}

dataRecording();
echo("<script>self.close()</script>");
?>