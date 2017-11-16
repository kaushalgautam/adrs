<?php
    session_start();
    
    
    require_once($_SERVER["DOCUMENT_ROOT"]."/adrs/resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    
    // echo isset($_SESSION['admin_username']);
    
    if(!isset($_SESSION['admin_username'])) {
        session_destroy();
        header('Location: index.php?m=Unauthorised access attempt detected, please try again');
    }
    // isset($_GET['id'] && isset($_GET['action']
    else if(true)
    {
        
            $servername = getenv('IP');
            $user = getenv('C9_USER');
            $pass = "";
            $db = "c9";
            
            // Create connection
            $conn = mysqli_connect($servername, $user, $pass, $db);
            
            
            $query = "select * from `requester` where alumni_roll = '" . $_GET['id'] . "';";
            $result = mysqli_query($conn, $query);
            
            
            if(mysqli_num_rows($result) == 0) {
                header("Location: admin_reg_show.php?m=There seems to be some trouble with the Student ID.");
            }
            else {
                
                if($_GET['action'] == 'approve') {
                    
                    $query_insert = "insert into `alumni_credentials` (alumni_roll, 
                                                                        alumni_name, 
                                                                        alumni_password, 
                                                                        alumni_phone, 
                                                                        alumni_email, 
                                                                        alumni_school, 
                                                                        alumni_dept, 
                                                                        alumni_program,
                                                                        alumni_batch)
                                                                    SELECT alumni_roll, 
                                                                        alumni_name, 
                                                                        alumni_password, 
                                                                        alumni_phone, 
                                                                        alumni_email, 
                                                                        alumni_school, 
                                                                        alumni_dept, 
                                                                        alumni_program,
                                                                        alumni_batch 
                                                                    FROM `requester` 
                                                                    WHERE alumni_roll = '" . $_GET['id'] . "';";
                                                                    
                    $query_delete = "delete from `requester` where alumni_roll = '" . $_GET['id'] . "';";
                    
                    echo mysqli_query($conn, "START TRANSACTION");
                    
                    echo $status_insert = mysqli_query($conn, $query_insert);
                    echo $status_delete = mysqli_query($conn, $query_delete);
                    
                    if($status_insert and $status_delete) 
                    {
                        echo mysqli_query($conn, "COMMIT");
                        // header("Location: admin_reg_show.php?m=Request Approved. Refer to the alumni list to find the migrated record");
                    }
                    else 
                    {
                        echo mysqli_query($conn, "ROLLBACK");
                        // header("Location: admin_reg_show.php?m=Operation failed");
                    }
                    
                }
                else if($_GET['action'] == 'delete') {
                    
                }
                else {
                    header("Location: admin_reg_show.php?m=There seems to be some trouble with the the kind of action you wish to perform.");
                }
                
            }
            
    }
        ?>