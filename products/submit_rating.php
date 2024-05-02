<?php

function getTourPage($tourName) {
    $tourMap = array(
        "Hoi An, VietNam" => "hoian.php"
    );
    return isset($tourMap[$tourName]) ? $tourMap[$tourName] : "";
}

function submitRating($tourName, $rating, $comment) {
    $ratings = file_exists('./tours_rating.json') ? json_decode(file_get_contents('./tours_rating.json'), true) : array();
    if (isset($ratings[$tourName])) {
        $ratings[$tourName][] = array(
            "rate" => $rating,
            "comment" => $comment
        );
    } else {
        $ratings[$tourName] = array(
            array(
                "rate" => $rating,
                "comment" => $comment
            )
        );
    }

    file_put_contents('./tours_rating.json', json_encode($ratings));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tourName = $_POST["tourName"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];
    submitRating($tourName, $rating, $comment);

    $tourPage = getTourPage($tourName);
    if (!empty($tourPage)) {
        header("Location: $tourPage");
        exit;
    } else {
        header("Location: tours.php");
        exit;
    }
}
?>