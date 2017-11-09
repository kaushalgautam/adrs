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
        <div class = "row">
            
            <div id = "left-panel" class = "col-sm-5" align = "center">
                
                <form name = "alumni_login" method = "POST" action="./alumni_login_action.php">
                  <div class="imgcontainer">
                    <h4>Login Alumni</h4>
                  </div>
                
                  <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="alumni_username" id = "alumni_username" required>
                
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="alumni_password" id = "alumni_password" required>
                        
                    <button type="submit" name="alumni_login" id = "alumni_login">Login</button>
                  </div>
                </form>
                
            </div>
            <div id = "border-panel" class = "col-sm-2" align = "center">
                
            </div>
            <div id = "right-panel" class = "col-sm-5" align = "center">
                <form name = "admin_login" method = "POST" action="./admin_login_action.php">
                  <div class="imgcontainer">
                    <h4>Login Admin</h4>
                  </div>
                
                  <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="admin_username" id = "admin_username" required>
                
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="admin_password" id = "admin_password" required>
                        
                    <button type="submit" name="admin_login" id = "admin_login">Login</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>