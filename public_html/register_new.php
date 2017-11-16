<?php
    session_start();
    
    require_once($_SERVER["DOCUMENT_ROOT"]."/adrs/resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
?>

<div class="container-fluid">
    <div class="jumbotron center-block">
        
        <!--Form-->
        <form class="form-horizontal" name = "register_form" action='register_action.php' method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Please enter the details</legend>
            </div>
            <div class="control-group">
              <!-- College Roll/ID -->
              <label class="control-label"  for="register_roll">Roll Number</label>
              <div class="controls">
                <input required type="text" id="register_roll" name="register_roll" placeholder="Enter your college ID" class="input-xlarge">
              </div>
            </div>
            
            
            <div class="control-group">
              <!-- Password-->
              <label class="control-label" for="register_password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" placeholder="Choose a strong password" class="input-xlarge">
              </div>
            </div>
         
            <div class="control-group">
              <!-- Password -->
              <label class="control-label"  for="password_confirm">Password (Confirm)</label>
              <div class="controls">
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Retype password here" class="input-xlarge">
              </div>
            </div>
            
            
         
            <div class="control-group">
              <!-- E-mail -->
              <label class="control-label" for="register_name">Name</label>
              <div class="controls">
                <input required type="text" id="register_name" name="register_name" placeholder="Enter your name" class="input-xlarge" required>
              </div>
            </div>
            
            <div class="control-group">
              <!-- E-mail -->
              <label class="control-label" for="register_email">University E-mail</label>
              <div class="controls">
                <input type="text" id="register_email" name="register_email" placeholder="Enter your university mail ID" class="input-xlarge" required>
              </div>
            </div>
         
            <div class="control-group">
              <!-- Password -->
              <label class="control-label"  for="register_phone">Phone</label>
              <div class="controls">
                <input type="text" id="register_phone" name="register_phone" placeholder="Enter phone" class="input-xlarge">
              </div>
            </div>
            
            <div class="control-group">
              <!-- Password -->
              <label class="control-label"  for="register_school">School</label>
              <div class="controls">
                <input type="text" id="register_school" name="register_school" placeholder="Enter school (SET, etc.)" class="input-xlarge">
              </div>
            </div>
            
            <div class="control-group">
              <!-- Password -->
              <label class="control-label"  for="register_dept">Department</label>
              <div class="controls">
                <input type="text" id="register_dept" name="register_dept" placeholder="Enter department (CSE, etc.)" class="input-xlarge">
              </div>
            </div>
            
            <div class="control-group">
              <!-- Password -->
              <label class="control-label"  for="register_program">Program</label>
              <div class="controls">
                <input type="text" id="register_program" name="register_program" placeholder="Enter program (BTECH, etc)" class="input-xlarge">
              </div>
            </div>
            
            <div class="control-group">
              <!-- Password -->
              <label class="control-label"  for="register_batch">Batch</label>
              <div class="controls">
                <input type="number" min = "2012" id="register_batch" name="register_batch" placeholder="Enter batch (2014, etc)" class="input-xlarge">
              </div>
            </div>
         
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success" name = "register_btn" type = "submit">Register</button>
              </div>
            </div>
          </fieldset>
        </form>
        
    </div>
</div>
<?php
        require_once(TEMPLATES_PATH . "/footer.php");
?>