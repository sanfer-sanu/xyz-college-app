<?php
//Start the session
session_start();

if(isset($_POST['submit'])) {
    
    //Including the connection file.
    include '../dao/dao.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //Error Handling
    //Check if input values are empty
    if(empty($username) || empty($password)) {
        header("Location: /plexus/index.php?login=empty");
        exit();
    } else {
      $sql = "SELECT * FROM admin where user_name='$username'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
  
      if($resultCheck < 1) {
        header("Location: /plexus/index.php?login=noresult");
        exit();

      } else {
        //Validate the given password
        if($row = mysqli_fetch_assoc($result)) {
  
          //De-hasing the password
          $hashedPwdCheck = password_verify($password, $row['password']);
          if($hashedPwdCheck == false) {
            header("Location: /plexus/index.php?login=passworderr");
            exit();
          } elseif ($hashedPwdCheck == true) {
            //Login the user here
            $_SESSION['u_id'] = $row['id'];
            $_SESSION['u_first'] = $row['first_name'];
            $_SESSION['u_last'] = $row['last_name'];
            $_SESSION['u_email'] = $row['email'];
            $_SESSION['u_uid'] = $row['user_name'];
            header("Location: /plexus/index.php?login=success");
            exit();
          }
        }
      }
    }       
  } else {
      header("Location: /plexus/index.php");
      exit();
  }
?>