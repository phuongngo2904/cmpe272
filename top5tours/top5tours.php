<?php include '../login/user_login.php'?>
<?php
function getTourPage($tourName) {
    $json_data = '{
        "Hawaii": {
            "tour_name": "Hawaii",
            "tour_detail": "10 days 9 nights",
            "tour_depart": "Depart at: San Francisco Airport",
            "tour_price": "$14,500",
            "img_path": "hawaii.jpeg"
        },
        "Puerto Rico": {
            "tour_name": "Puerto Rico",
            "tour_detail": "10 days 9 nights",
            "tour_depart": "Depart at: San Francisco Airport",
            "tour_price": "$10,000",
            "img_path": "puertorico.jpeg"
        },
        "Hoi An, VietNam": {
            "tour_name": "Hoi An, VietNam",
            "tour_detail": "10 days 9 nights",
            "tour_depart": "Depart at: San Francisco Airport",
            "tour_price": "$20,000",
            "img_path": "hoian.jpeg"
        },
        "Maldives": {
            "tour_name": "Maldives",
            "tour_detail": "7 days 6 nights",
            "tour_depart": "Depart at: San Francisco Airport",
            "tour_price": "$7,500",
            "img_path": "maldives.jpeg"
        },
        "Son Doong, VietNam": {
            "tour_name": "Son Doong Cave, VietNam",
            "tour_detail": "10 days 9 nights",
            "tour_depart": "Depart at: San Francisco Airport",
            "tour_price": "$14,500",
            "img_path": "sondoong.jpeg"
        },
        "Cancun": {
            "tour_name": "Cancun",
            "tour_detail": "4 days 3 nights",
            "tour_depart": "Depart at: San Francisco Airport",
            "tour_price": "$4,500",
            "img_path": "cancun.jpeg"
        }
    }';
    
    // Decode JSON data into PHP array
    $tourMap = json_decode($json_data, true);
    return isset($tourMap[$tourName]) ? $tourMap[$tourName] : "";
}

$json_data = file_get_contents('../products/tours_rating.json');
$data = json_decode($json_data, true);
$product_review_counts = array();
foreach ($data as $product => $reviews) {
    $review_count = 0;
    foreach ($reviews as $review) {
        if ($review['rate'] >= 4) {
            $review_count++;
        }
    }
    $product_review_counts[$product] = $review_count;
}

arsort($product_review_counts);
$top_5_tours = array_slice($product_review_counts, 0, 5, true);
?>
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
        <p style="color:#1abc9c; margin-left:10px">Hi, <?php echo $_SESSION["username"]; ?></p>
        <a id="sidebar_home" href="../main_dashboard/main.php"><i class="fa fa-fw fa-home icon"></i> Home</a>
        <a id="sidebar_tours" href="../products/tours.php"><i class="fa fa-fw fa-user icon"></i> Tours</a>
        <a id="sidebar_tours" href="../top5tours/top5tours.php" class="tab_selected"><i class="fa fa-fw fa fa-star"></i>Top 5 tours</a>
        <a id="sidebar_contact" href="../contacts/contact.php"><i class="fa fa-fw fa-phone-square icon"></i> Contact</a>
        <a id="sidebar_users" href="../users/cur_users.php"><i class="fa fa-fw fa fa-group icon"></i> Users</a>
        <a href="../logout/logout.php" id="sidebar_logout"><i class="fa fa-fw fa fa-sign-out"></i> Log Out</a>
        <a href="https://phuocle.website/main" style="margin-top:200px"><i class="fa fa-fw fa fa-mail-reply"></i> Back To MainPage</a>
    </div>
    <div class="main">
        <div id="main_tours" style="display:flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;gap:20px;">
            <?php foreach ($top_5_tours as $tourName => $_): ?>
                <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                    <img src="../main_dashboard/<?php echo getTourPage($tourName)["img_path"]; ?>" alt="Your Logo" style="width: 100%;height:26vh"/>
                    <p style="color:#00bbbb;"><?php echo getTourPage($tourName)["tour_name"]; ?></p>
                    <p class="fa fa-calendar" style="color:#00bbbb;"><?php echo getTourPage($tourName)["tour_detail"]; ?></p>
                    <p class="fa fa-map-marker" style="color:#00bbbb;"><?php echo getTourPage($tourName)["tour_depart"]; ?></p>
                    <p class="fa fa-money" style="color:#00bbbb;"><?php echo getTourPage($tourName)["tour_price"]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
        
</body>
</html> 