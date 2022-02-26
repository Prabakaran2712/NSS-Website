<?php 
    require './views/config.php';
     session_start();

// CREATE TABLE USERS(username varchar(255), password varchar(255), isAdmin integer DEFAULT 0);

    if (isset($_SESSION['user'])) {
        header('location: index.php');
    }
    $username = $password = $out_err = "";
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);

        $sql = "SELECT username, password, isAdmin FROM users WHERE username='$username'";

        $result = mysqli_query($con, $sql);

        if (!$result->num_rows) {
            // no row found for given email
            $out_err = "Oops! We couldn't find your account";
        } else {
            $arr = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
            if (sha1($_POST['password'])==$arr['password']) {
                // password match success redirect to respective page
                $_SESSION['user'] = $arr['username'];
                $_SESSION['is_admin'] = $arr['isAdmin'];
                header("location: admin.php");
            } else {
                // password didn't match
                $out_err = "Invalid password, try again";
            }
        }
    }

    require './views/header.php';

?>

<div class="container">
    <h1 class="display-2 mx-3 my-5">Sign in</h1>

    <div class="lead text-danger mb-3"><?PHP echo $out_err; ?></div>
    <form action="login.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username: </label>
            <input type="text" name="username" class="form-control" style="max-width: 300px;">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password: </label>
            <input type="password" name="password" class="form-control" style="max-width: 300px;">
        </div>
        <div class="mb-4">
            <input class="btn" style="background-color: #303983;" type="submit" value="Login" name="submit">
        </div>
    </form>

</div>
<?php require './views/footer.php'; ?>