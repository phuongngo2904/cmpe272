<!-- <?php
    // session_start();
    // if(!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]){
    //     header("location: ../login.php");
    //     return;
    // }
    ?> -->
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../style/main.css">
    </head>
    <body>
        <div class="sidebar">
            <div style="display:flex; flex-direction: column; align-items: center; margin-bottom:25%">
                <img src="../main_dashboard/travel_logo.jpeg" alt="Your Logo" style="width: 95%;height:15%"/>
                <span style="color:#0c1e35">YOLO Travel</span>
            </div>
            <a id="sidebar_home" href="../main_dashboard/main.php"><i class="fa fa-fw fa-home icon"></i> Home</a>
            <a id="sidebar_tours" href="../products/tours.php"><i class="fa fa-fw fa-user icon"></i> Tours</a>
            <a id="sidebar_contact" class="tab_selected"><i class="fa fa-fw fa-phone-square icon"></i> Contact</a>
            <a id="sidebar_users" href="../users/cur_users.php"><i class="fa fa-fw fa fa-group icon"></i> Users</a>
            <!-- <a href="../logout/logout.php" id="sidebar_logout"><i class="fa fa-fw fa fa-sign-out"></i> Log Out</a> -->
        </div>
        <div class="main">
            <div id="main_contact" style="display:block; flex-direction: column; flex-wrap: wrap; justify-content: space-between;">
                <p style="color:#00bbbb;font-family: Lucida Console, Courier New, monospace;">Reach us at: </p>
                <?php
                    $json_data = file_get_contents('contact.json');
                    $data = json_decode($json_data, true);
                    if ($data !== null) {
                        foreach ($data as $key => $value) {
                            echo "<p style=\"color:#00bbbb\"><strong>$key:</strong> $value</p>";
                        }
                    } else {
                        echo "Error decoding JSON data";
                    }
                ?>
            </div>
        </div>
         
    </body>
</html> 