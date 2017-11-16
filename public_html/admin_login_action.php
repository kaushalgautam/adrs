<?php
    session_start();

    $servername = getenv('IP');
    $user = getenv('C9_USER');
    $pass = "";
    $db = "c9";
    
    // Create connection
    $conn = mysqli_connect($servername, $user, $pass, $db);
    
    if(isset($_POST['admin_login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['admin_username']);
        $password = mysqli_real_escape_string($conn, $_POST['admin_password']);
        
        $query = "select * from `admin_credentials` where admin_name = '" . $username . "' and admin_password = '" . $password . "';";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 0) {
            header('Location: index.php?m=Incorrect User Details Entered, please try again');
        }
        else {
            $_SESSION['admin_username'] = $username;
            header('Location: admin_homepage.php');
        }

    }
        
?>