<?php
    // load up your config file
    require_once($_SERVER["DOCUMENT_ROOT"]."/adrs/resources/config.php");
    require_once(TEMPLATES_PATH . "/header.php");
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
        <!-- content -->
        <h1 class = "display-3">Hello World</h1>
    </div>
</div>
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>