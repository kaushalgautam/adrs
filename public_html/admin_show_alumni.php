<?php
    session_start();
    
    
    require_once($_SERVER["DOCUMENT_ROOT"]."/adrs/resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
    
    // echo isset($_SESSION['admin_username']);
    
    if(!isset($_SESSION['admin_username'])) {
        session_destroy();
        header('Location: index.php?m=Unauthorised access attempt detected, please try again');
    }
    else {

?>

<div class="container-fluid">
    <div class="jumbotron center-block">
        
        <!-- Warning message block -->
        <?php
            if(isset($_GET['m'])) {
        ?>
        
        <div class="alert alert-danger row" role = "alert" align = "center">
          <?php 
            echo $_GET['m'];
          ?>
        </div>
        
        <?php
            }
        ?>
        
        <!-- content -->
        <div class = "d-flex justify-content-center">
            <h3 id = "admin-jumbotron">List of registered alumni: </h1>
        </div>

        <?php
        
            $servername = getenv('IP');
            $user = getenv('C9_USER');
            $pass = "";
            $db = "c9";
            
            // Create connection
            $conn = mysqli_connect($servername, $user, $pass, $db);
            
            
            $query = "select * from `alumni_credentials`;";
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) == 0) {

                echo "<h3> There are no registered alumni currently </h3>";

            }
            else {
                
                echo "<table class = 'table'>
                        <tr>
                            <th>Roll </th>
                            <th>Name </th>
                            <th>Phone </th>
                            <th>E-mail </th>
                            <th>School </th>
                            <th>Department </th>
                            <th>Program </th>
                            <th>Batch </th>
                        </tr>";
                
                while($row = mysqli_fetch_assoc($result)) {
                    echo  "<tr>
                            <td> " . $row["alumni_roll"] . "
                            <td> " . $row["alumni_name"] . "
                            <td> " . $row["alumni_phone"] . "
                            <td> " . $row["alumni_email"] . "
                            <td> " . $row["alumni_school"] . "
                            <td> " . $row["alumni_dept"] . "
                            <td> " . $row["alumni_program"] . "
                            <td> " . $row["alumni_batch"] . "
                           </tr> 
                           <br>";
                }
                
                echo "</table>";
                
            }
    
        ?>
        <div align = "center">
            <button onclick="goBack()"  type="button" class="btn btn-default btn-lg">
              <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </button>
        </div>
    </div>
    
</div>
<?php
        require_once(TEMPLATES_PATH . "/footer.php");
    }
?>