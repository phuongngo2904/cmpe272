<?php
    ob_start();
    session_start();
    if (!empty($_POST["userName"]) && !empty($_POST["userPassword"])){
        $json_data = file_get_contents('credentials.json');
        $data = json_decode($json_data, true);
        if ($data !== null) {
            foreach($data as $user) {
                $id = $user['user_id'];
                $pw = $user['password'];
                if($_POST["userName"] == $id && $_POST["userPassword"] == $pw ){
                    $_SESSION["isLoggedIn"] = true;
                    header("location: ../main_dashboard/main.php");
                    exit;
                }
            }
        } 
        header("location: ../login.php?isLoggedIn=-1");
        return;
    } else {
        header("location: ../login.php?isLoggedIn=-1");
        return;
    }
?>