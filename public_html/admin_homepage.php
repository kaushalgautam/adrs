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
            <h3 id = "admin-jumbotron">HELLO <?php echo $_SESSION['admin_username']; ?>! What would you like to do? </h1>
        </div>
        
        <div class = "d-flex justify-content-center">
            <div class="list-group">
                <a href="show_alumni.php" class="list-group-item list-group-item-action active">
                Show Aluni
                </a>
                <a href="show_reg_req.php" class="list-group-item list-group-item-action">Show pending registration requests</a>
                <a href="" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
            </div>
        </div>
        
    </div>
</div>
<?php
        require_once(TEMPLATES_PATH . "/footer.php");
    }
?>