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
            <img src="travel_logo.jpeg" alt="Your Logo" style="width: 95%;height:15%"/>
            <span style="color:#0c1e35">YOLO Travel</span>
        </div>
        <a id="sidebar_home" class="tab_selected"><i class="fa fa-fw fa-home icon"></i> Home</a>
        <a id="sidebar_tours" href="../products/tours.php"><i class="fa fa-fw fa-user icon"></i> Tours</a>
        <a id="sidebar_contact" href="../contacts/contact.php"><i class="fa fa-fw fa-phone-square icon"></i> Contact</a>
        <a id="sidebar_users"><i class="fa fa-fw fa fa-group icon"></i> Users</a>
        <!-- <a href="../logout/logout.php" id="sidebar_logout"><i class="fa fa-fw fa fa-sign-out"></i> Log Out</a> -->
    </div>
    <div class="main">
        <div id="main_home" style="display:flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">
            <p style="color:#00bbbb; display:block">Don't miss this chance, we'll YOLO with you, friends</p>
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="cancun.jpeg" alt="Your Logo" style="width: 100%;height:100%"/>
                <p style="color:#00bbbb;"> Cancun</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 4 days 3 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p class="fa fa-money" style="color:#00bbbb;"> <s>$4,500</s> $2,500</p>
                <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer"><i class="fa fa-fw fa-phone-square icon" style="color:#00bbbb;"></i> Book</a>
            </div>
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="japan.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                <p style="color:#00bbbb;"> Japan</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 14 days 13 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p class="fa fa-money" style="color:#00bbbb;"> <s>$14,500</s> $8,500</p>
                <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer"><i class="fa fa-fw fa-phone-square icon" style="color:#00bbbb;"></i> Book</a>
            </div>
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="maldives.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                <p style="color:#00bbbb;"> Maldives</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p class="fa fa-money" style="color:#00bbbb;"> <s>$14,500</s> $8,500</p>
                <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer"><i class="fa fa-fw fa-phone-square icon" style="color:#00bbbb;"></i> Book</a>
            </div>
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="korea.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                <p style="color:#00bbbb;"> Korea</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p class="fa fa-money" style="color:#00bbbb;"> <s>$14,500</s> $8,500</p>
                <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer"><i class="fa fa-fw fa-phone-square icon" style="color:#00bbbb;"></i> Book</a>
            </div>
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="sondoong.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                <p style="color:#00bbbb;"> Son Doong Cave, VietNam</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p class="fa fa-money" style="color:#00bbbb;"> <s>$14,500</s> $8,500</p>
                <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer"><i class="fa fa-fw fa-phone-square icon" style="color:#00bbbb;"></i> Book</a>
            </div>
        </div>
    </div>
     
</body>
</html> 