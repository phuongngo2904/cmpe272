<?php include '../login/user_login.php'?>
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
        <a id="sidebar_contact" href="../contacts/contact.php"><i class="fa fa-fw fa-phone-square icon"></i> Contact</a>
        <a id="sidebar_users" class="tab_selected"><i class="fa fa-fw fa fa-group icon"></i> Users</a>
        <a href="../logout/logout.php" id="sidebar_logout"><i class="fa fa-fw fa fa-sign-out"></i> Log Out</a>
    </div>
    <div class="main">
        <div id="main_users" style="display:block; flex-direction: column; flex-wrap: wrap; justify-content: space-between;">
            <div class="tab-buttons">
                <button onclick="changeTab('userCreationTab')">User Creation</button>
                <button onclick="changeTab('userSearchTab')">User Search</button>
            </div>
            <div class="tab" id="userCreationTab">
                <h2>User Creation Form</h2>
                <form action="create_user.php" method="post">
                    <label for="firstName">First Name:</label><br>
                    <input type="text" id="firstName" name="first_name"><br>
                    <label for="lastName">Last Name:</label><br>
                    <input type="text" id="lastName" name="last_name"><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="homeAddress">Home Address:</label><br>
                    <input type="text" id="homeAddress" name="home_address"><br>
                    <label for="homePhone">Home Phone:</label><br>
                    <input type="tel" id="homePhone" name="home_phone"><br>
                    <label for="cellPhone">Cell Phone:</label><br>
                    <input type="tel" id="cellPhone" name="cell_phone"><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="tab" id="userSearchTab">
                <h2>User Search Form</h2>
                <form action="search_users.php" method="get">
                    <label for="searchTerm">Search Term:</label><br>
                    <input type="text" id="searchTerm" name="searchTerm"><br><br>
                    <input type="submit" value="Search">
                    <select id="searchBy" name="searchBy">
                        <option value="first_name">first_name</option>
                        <option value="last_name">last_name</option>
                        <option value="email">email</option>
                        <option value="home_phone">home_phone</option>
                        <option value="cell_phone">cell_phone</option>
                    </select><br><br>
                </form>
            </div>

        </div>
    </div>
        
</body>
<script>
    let array_sidebars = document.querySelectorAll("a[id^='sidebar']");
    function changeTab(tabName) {
        var tabs = document.querySelectorAll('.tab');
        tabs.forEach(function(tab) {
            if (tab.id === tabName) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });
    }
</script>
</html> 