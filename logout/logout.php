<?php include '../login/user_login.php'?>
<?php
    session_unset();
    session_destroy();
    header("location: https://phuocle.website/main");
    return;
?>