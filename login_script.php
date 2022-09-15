<?php

if (isset($_POST['login'])) {
    $username_login = $_POST['username'];
    $pass_login = $_POST['password'];

    $pass = mysqli_real_escape_string($connection, $pass_login);

    $sql_query = "SELECT * FROM user WHERE username = '{$username_login}' AND password = '{$pass_login}'";
    $query = mysqli_query($connection, $sql_query);
    $count = mysqli_num_rows($query);

    if (!$query) {
        die("QUERY FAILED." . mysqli_error($connection));
    }

    if (!empty($username_login) && !empty($pass_login)) {

        if ($count <= 0) {
            $error3 = "<div class='alert alert-danger alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    User not registered.
                  </div>";
        } else {
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id_user'];
                $username = $row['username'];
                $password = $row['password'];
            }

            if ($count > 0) {

                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;

                    header("Location: index.php");

            } else {
                $error3 = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Login Failed
              </div><div class='alert alert-info alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Try Again!
            </div>";
            }
        }
    } else {
        if (empty($email_login)) {
            $error1 = "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            Username still empty
          </div>";
        }

        if (empty($pass_login)) {
            $error2 = "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            Password still empty
          </div>";
        }
    }
}
