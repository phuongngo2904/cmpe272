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
            <a id="sidebar_tours" class="tab_selected"><i class="fa fa-fw fa-user icon"></i> Tours</a>
            <a id="sidebar_contact" href="../contacts/contact.php"><i class="fa fa-fw fa-phone-square icon"></i> Contact</a>
            <a id="sidebar_users" href="../users/cur_users.php"><i class="fa fa-fw fa fa-group icon"></i> Users</a>
            <!-- <a href="../logout/logout.php" id="sidebar_logout"><i class="fa fa-fw fa fa-sign-out"></i> Log Out</a> -->
        </div>
        <div class="main">
            <div id="main_tours" style="display:flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">
                <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                    <img src="../main_dashboard/hawaii.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                    <p style="color:#00bbbb;"> Hawaii</p>
                    <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                    <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                    <p class="fa fa-money" style="color:#00bbbb;">$14,500</p>
                    <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer" href="./hoian.php"><i class="fa fa-fw fa-eye" style="color:#00bbbb;"></i> View</a>
                </div>
                <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                    <img src="../main_dashboard/puertorico.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                    <p style="color:#00bbbb;"> Puerto Rico</p>
                    <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                    <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                    <p class="fa fa-money" style="color:#00bbbb;">$10,000</p>
                    <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer" href="./hoian.php"><i class="fa fa-fw fa-eye" style="color:#00bbbb;"></i> View</a>
                </div>
                <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                    <img src="../main_dashboard/hoian.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                    <p style="color:#00bbbb;"> Hoi An, VietNam</p>
                    <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                    <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                    <p class="fa fa-money" style="color:#00bbbb;">$20,000</p>
                    <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer" href="./hoian.php"><i class="fa fa-fw fa-eye" style="color:#00bbbb;"></i> View</a>
                </div>
            </div>
        </div>
         
    </body>
    </html> 