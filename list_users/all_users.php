<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }
        .container {
            display: flex;
            flex-direction: row;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            gap:50px;
        }
        .request {
            margin-bottom: 20px;
        }
        .request-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .user {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .user-icon {
            font-size: 24px;
            margin-right: 10px;
            color:springgreen;
        }
        .user-info {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Users</h2>
        <?php

        function executeCurlRequest($name, $url) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
            if ($response === false) {
                echo '<div class="request">';
                echo '<div class="request-name">' . $name . '</div>';
                echo '<div class="response">cURL error: ' . curl_error($curl) . '</div>';
                echo '</div>';
            } else {
                $data = json_decode($response, true);
                echo '<div class="request">';
                echo '<div class="request-name">' . $name . '</div>';
                if (is_array($data)) {
                    foreach ($data as $user) {
                        echo '<div class="user">';
                        echo '<div class="user-icon"><i class="fas fa fa-user-secret"></i></div>';
                        echo '<div class="user-info">';
                        if (isset($user['first_name']) && isset($user['last_name'])) {
                            echo $user['first_name'] . ' ' . $user['last_name'];
                        } elseif (isset($user['username'])) {
                            echo $user['username'];
                        } elseif (isset($user['name'])) {
                            echo $user['name'];
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="response">Invalid JSON format</div>';
                }
                echo '</div>';
            }
            curl_close($curl);
        }
        $requests = [
            'Phuong Ngo Company' => 'https://cmpe272.phuongngo.net/list_users/users.php',
            'Phuc Le Company' => 'https://phucle.website/api/userEP.php',
            'Phuoc Le Company' => 'https://phuocle.website/curl/users.php',
            'Vinh Tran Company' => 'https://phuocle.website/curl/users.php'
        ];

        foreach ($requests as $name => $url) {
            executeCurlRequest($name, $url);
        }

        ?>
    </div>
</body>
</html>
