<?php

    $servername = getenv('IP');
    $user = getenv('C9_USER');
    $pass = "";
    $db = "c9";
    
    // Create connection
    $conn = mysqli_connect($servername, $user, $pass, $db);
    
    if(isset($_POST['register_btn'])) {
        $roll = $_POST['register_roll'];
        $password = $_POST['password'];
        $name = $_POST['register_name'];
        $email = $_POST['register_email'];
        $phone = $_POST['register_phone'];
        $school = $_POST['register_school'];
        $dept = $_POST['register_dept'];
        $program = $_POST['register_program'];
        $batch = $_POST['register_batch'];        
                
        $check_query = "select * from `alumni_credentials` where alumni_roll = '" . $roll . "' OR alumni_email = '". $email ."';" ;
        
        $result = mysqli_query($check_query);
        
        if(mysqli_num_rows($result) == 0) {
            
            $query = "insert into `requester`(alumni_roll, 
                                                alumni_name, 
                                                alumni_password, 
                                                alumni_phone, 
                                                alumni_email, 
                                                alumni_school, 
                                                alumni_dept, 
                                                alumni_program,
                                                alumni_batch)
                                    values ('". $roll ."',
                                            '". $name ."',
                                            '". $password ."',
                                             ". $phone .",
                                            '". $email ."',
                                            '". $school ."',
                                            '". $dept ."',
                                            '". $program ."',
                                            ". $batch ."
                                    );";
                                    
            if (mysqli_query($conn, $query)) 
            {
                header("index.php?m=Registration request submitted successfully!");
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else 
        {
            header("Location: index.php?m=Account already registered. Please try logging in as Alumni !");
        }
    }
?>