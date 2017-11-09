<?php

    $servername = getenv('IP');
    $user = getenv('C9_USER');
    $password = "";
    
    // Create connection
    $conn = mysqli_connect($servername, $user, $password);
    
    if (!$conn)
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    if(isset($_POST['admin_login'])) 
    {

        $username = $_POST['admin_username'];
        $password = $_POST['admin_password'];

        $query = "select * from `admin_credentials`";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) > 0) {
            // header('Location: index.php?m=Incorrect Alumni Details Entered, please try again');
            echo $query;
        }

    }
        
?>