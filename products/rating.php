<?php
    $ratings_json = file_get_contents('tours_rating.json');
    $ratings = json_decode($ratings_json, true);

    if (isset($ratings[$tour_name])) {
        echo "<h2>Rating for $tour_name:</h2>";
        foreach ($ratings[$tour_name] as $review) {
            echo "<div class='rating'>";
            echo "<div class='stars'>";
            for ($i = 0; $i < $review['rate']; $i++) {
                echo "<i class='fa fa-star'></i>";
            }
            echo "</div>";
            echo "<div class='comment'>" . $review['comment'] . "</div>";
            echo "</div>";
            echo "<hr>";

        }
    } else {
        echo "<p>No ratings for $tour_name tour yet.</p>";
    }
?>