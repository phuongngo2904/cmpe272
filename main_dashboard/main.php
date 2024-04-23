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
    <style>
        body {font-family: "Lato", sans-serif;}
        .tab {
            display: none;
        }
        .tab.active {
            display: block;
        }
        .tab-buttons {
            margin-bottom: 20px;
        }
        .tab-buttons button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s;
        }
        .tab-buttons button:hover {
            background-color: #45a049;
        }
        .sidebar {
            border-radius: 2px;
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            /* border-right: 1px solid black; */
            /* background-color: #0c1e35; */
            background-color: white;
            overflow-x: hidden;
            padding-top: 16px;
        }

        .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color:#0c1e35;
            display: block;
            cursor: pointer;
        }

        .sidebar a:hover {
            color: white;
            background-color: #00bbbb;
        }

        .main {
            margin-left: 160px;
            padding: 0px 10px;
        }
        .icon {
            color:#0c1e35;
        }
        .tab_selected {
            background-color: #00bbbb;
            color:white;

        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div style="display:flex; flex-direction: column; align-items: center; margin-bottom:25%">
            <img src="travel_logo.jpeg" alt="Your Logo" style="width: 95%;height:15%"/>
            <span style="color:#0c1e35">YOLO Travel</span>
        </div>
        <a id="sidebar_home" class="tab_selected"><i class="fa fa-fw fa-home icon"></i> Home</a>
        <a id="sidebar_tours"><i class="fa fa-fw fa-user icon"></i> Tours</a>
        <a id="sidebar_contact"><i class="fa fa-fw fa-phone-square icon"></i> Contact</a>
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
        <div id="main_tours" style="display:none; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="hawaii.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                <p style="color:#00bbbb;"> Hawaii</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p class="fa fa-money" style="color:#00bbbb;">$14,500</p>
                <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer"><i class="fa fa-fw fa-phone-square icon" style="color:#00bbbb;"></i> Book</a>
            </div>
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="puertorico.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                <p style="color:#00bbbb;"> Puerto Rico</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p class="fa fa-money" style="color:#00bbbb;">$10,000</p>
                <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer"><i class="fa fa-fw fa-phone-square icon" style="color:#00bbbb;"></i> Book</a>
            </div>
            <div style="display:flex; flex-direction: column; align-items: center; border: 2px solid black;width:30%; height:30%; border-radius:10px;">
                <img src="hoian.jpeg" alt="Your Logo" style="width: 100%;height:26vh"/>
                <p style="color:#00bbbb;"> Hoi An, VietNam</p>
                <p class="fa fa-calendar" style="color:#00bbbb;"> 10 days 9 nights</p>
                <p class="fa fa-map-marker" style="color:#00bbbb;"> Depart at: San Francisco Airport</p>
                <p >$20,000</p>
                <a style="color:#00bbbb;border: 2px solid #00bbbb;border-radius:4px; width:20%; cursor:pointer"><i class="fa fa-fw fa-phone-square icon" style="color:#00bbbb;"></i> Book</a>
            </div>
        </div>
        <div id="main_contact" style="display:none; flex-direction: column; flex-wrap: wrap; justify-content: space-between;">
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
        <div id="main_users" style="display:none; flex-direction: column; flex-wrap: wrap; justify-content: space-between;">
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
    array_sidebars.forEach(obj=>{
        obj.addEventListener("click", (e)=>{
            var arg = obj.id.split("_").slice(1);
            console.log(arg);
            array_sidebars.forEach(tmp => {
                tmp.classList.remove("tab_selected");
                console.log(`main_${tmp.id.split("_").slice(1)}`);
                if(document.getElementById(`main_${tmp.id.split("_").slice(1)}`)){
                    document.getElementById(`main_${tmp.id.split("_").slice(1)}`).style.display = "none";
                }
                
            });
            document.getElementById(`main_${arg}`).style.display="flex";
            obj.classList.add("tab_selected");
        });
    });

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