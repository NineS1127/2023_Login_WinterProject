<?php
session_start();

include("./connectdb.php");

$id = $_POST['email'];

$sql = sprintf("select * from member where email='%s';", $id);
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) == 1) {
  $rows = mysqli_fetch_assoc($result);
  //특정 IP address에서만 관리자 로그인 가능 - 구현 X
  //민감 정보 노출 X ini파일에 IP 정보 보관할 것(수정 요망)
  if ($_POST['password']==$rows['pwd']){
    $_SESSION['userid'] = $id;
    $_SESSION['nickname'] = $rows['name'];
    if (isset($_SESSION['userid'])) {
?>
      <script>
        location.replace("./main.php");
      </script>
<?php
    } else {
      echo "session failed";
    }
  } else {
        ?> <script>
            alert("Email이 틀렸습니다.");
            history.back();
        </script>
    <?php
  }} else {
      ?> <script>
          alert("PASSWORD가 틀렸습니다.");
          history.back();
      </script>
<?php
}
?>
