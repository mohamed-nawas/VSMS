<?php
  require 'dbh.inc.php';
  $mail = $_SESSION['usermail'];

  $sql = "SELECT * FROM profileimg WHERE usermail='$mail'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
      if ($row['profileimgstatus'] == 0) {
        echo "<script>document.getElementById('profileImg').src = 'uploads/profile_".$mail.".jpg'</script>";
        echo "<script>document.getElementById('profileiconimg').src = 'uploads/profile_".$mail.".jpg'</script>";
      }
      else if ($row['profileimgstatus'] == 1) {
        echo "<script>document.getElementById('profileImg').src = 'uploads/profile_default.jpg'</script>";
        echo "<script>document.getElementById('profileiconimg').src = 'uploads/profile_default.jpg'</script>";
      }
  }
 ?>
