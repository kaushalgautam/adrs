<?php
    // load up your config file
    require_once($_SERVER["DOCUMENT_ROOT"]."/adrs/resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
?>
<div class="container-fluid">
    <div class="jumbotron">
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
        <div class = "row" align = "center">
            <h1 class = "display-3">HELLO ALUMNI</h1>
        </div>
    </div>
</div>
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>