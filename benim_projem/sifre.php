<?php
      if (isset($_POST['login'])) {
    	 	$user = $_POST['username'];
    	 	$pass = $_POST['password'];
    	 	$sql = "SELECT username, password FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($dbc);
    	 		if (mysqli_stmt_prepare($stmt, $sql)) {
    	 			mysqli_stmt_bind_param($stmt, 's', $user);
    	 			mysqli_stmt_execute($stmt);
    	 			mysqli_stmt_store_result($stmt);
    	 		}
    	 		mysqli_stmt_bind_result($stmt, $userName, $userPass);
    	 		mysqli_stmt_fetch($stmt);

          if (password_verify($_POST['password'], $userPass) && mysqli_stmt_num_rows($stmt) > 0) {
            $login_success = true;
    	 		  $_SESSION['username'] = $userName;
            header('Location: index.php');
    	 	  } else {
    	 		  $login_success = false;
    	 	}
    	}
    ?>