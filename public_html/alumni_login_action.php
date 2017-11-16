<?php

    $servername = getenv('IP');
    $user = getenv('C9_USER');
    $pass = "";
    $db = "c9";
    
    // Create connection
    $conn = mysqli_connect($servername, $user, $pass, $db);
    
    if(isset($_POST['alumni_login'])) {
        $id = $_POST['alumni_roll'];
        $password = $_POST['alumni_password'];
        
        echo $query = "select * from `alumni_credentials` where alumni_roll = '" . $id . "' and alumni_password = '" . $password . "';";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 0) {
            header('Location: index.php?m=Incorrect Alumni Details Entered, please try again');
        }
        else {
            header('Location: alumni_homepage.php');
        }

    }
        
?>