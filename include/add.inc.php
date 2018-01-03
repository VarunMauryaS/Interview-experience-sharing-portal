<?php
function get_title() {
  return "computing";
}
include_once 'header.inc.php';

if (isset($_POST['submit'])){
  include 'db.inc.php';

	$puser = mysqli_real_escape_string($conn, $_SESSION['user_id']);
  $ptitle = mysqli_real_escape_string($conn, $_POST['title']);
	$pcompany = mysqli_real_escape_string($conn, $_POST['company']);
  $pdetail = mysqli_real_escape_string($conn, $_POST['detail']);
  $pdate = date("Y-m-d H:i:s");
  $sql = "INSERT INTO experience (post_user,post_title,post_company,post_detail,post_date) VALUES ('$puser', '$ptitle', '$pcompany', '$pdetail','$pdate');";
  mysqli_query($conn, $sql);
  header("Location: ../");
  exit();
}

?>
