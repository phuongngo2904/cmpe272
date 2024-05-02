<?php
function getTourPage($tourName) {
    $tourMap = array(
        "Hoi An, VietNam" => "hoian.php",
        "Puerto Rico" => "puertorico.php",
        "Hawaii" => "hawaii.php",
        "Maldives" => "maldives.php",
        "Son Doong, VietNam" =>"sondoong.php",
        "Cancun" => "cancun.php"
    );
    return isset($tourMap[$tourName]) ? $tourMap[$tourName] : "";
}

$json_data = file_get_contents('tours_rating.json');
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
$top_5_products = array_slice($product_review_counts, 0, 5, true);

$result = array();
foreach ($top_5_products as $product_name => $review_count) {
    $endpoint = getTourPage($product_name);
    $result[] = array(
        "product_name" => $product_name,
        "review_count" => $review_count,
        "url" => "https://cmpe272.phuongngo.net/products/$endpoint"
    );
}

echo json_encode($result);
?>
