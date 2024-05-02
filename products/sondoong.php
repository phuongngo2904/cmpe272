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
        <a href="../products/tours.php">Back to tours</a><br><br><br>
        <div id="main_tours" style="display:flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="../main_dashboard/sondoong.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                <p style="color:#00bbbb;"> Son Doong Cave, VietNam</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p class="fa fa-money" style="color:#00bbbb;"> $14,500</p>
            </div>
        </div>
        <div>
            <form method="POST" action="submit_rating.php">
                <input type="hidden" name="tourName" value="Son Doong, VietNam">
                <label for="rating">Rate this tour:</label>
                <select id="rating" name="rating">
                    <option value="1">1 star</option>
                    <option value="2">2 stars</option>
                    <option value="3">3 stars</option>
                    <option value="4">4 stars</option>
                    <option value="5">5 stars</option>
                </select><br><br>

                <!-- Comment Section -->
                <label for="comment">Leave a comment:</label><br>
                <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br><br>

                <!-- Button to Submit Rating and Comment -->
                <button type="submit">Submit</button>
            </form>
        </div>
        <?php $tour_name = "Son Doong, VietNam"; include 'rating.php'; ?>
    </div>
    
</body>
</html> 