<?php

session_start();

if(isset($_POST['submit'])) {

  include 'dbh.inc.php';

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //Erro Handler
  //Check if inputs are EmptyIterator

  if(empty($uid) || empty($pwd)) {
    header("Location: ../index.php?login=error");
    exit();
  } else {
    $sql = "SELECT * FROM users where user_uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1) {
      header("Location: ../index.php?login=error");
      exit();
    } else {
      //Validate the given password
      if($row = mysqli_fetch_assoc($result)) {

        //De-hasing the password
        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if($hashedPwdCheck == false) {
          header("Location: ../index.php?login=error");
          exit();
        } elseif ($hashedPwdCheck == true) {
          //Login the user here
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          header("Location: ../index.php?login=success");
          exit();
        }
      }
    }


  }

  header("Location: ../index.php?login=error");
  exit();

} else {
}
