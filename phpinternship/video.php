<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ivy Streams</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" type="text/css" href="./webdev/styling.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<nav id="nav_bar" class="nav fixed">
            <div class="pic">
                <img src="./webdev/e-commerce.jpg" width="150px">
                </div>
                <div class="top_section">
                    <a href="./webdev/index.php">Home</a>
                    <a href="./webdev/about.php"> About Us</a>
                    <a href="/phpinternship/logout.php"> Logout</a>
            </div>
            
        </nav>
    <h2>Create an account on agora.io and get APP ID, Temp Token and Channel Name<br>
        Update APP ID, Temp Token and Channel Name in script.js</h2>
    <button id="join-btn">Join Stream</button>

    <div id="stream-wrapper">
        <div id="video-streams"></div>

        <div id="stream-controls">
            <button id="leave-btn">Leave Stream</button>
            <button id="mic-btn">Mic On</button>
            <button id="camera-btn">Camera on</button>
        </div>
    </div>
    
</body>
<!-- <script src="https://download.agora.io/sdk/release/AgoraRTC_N.js"></script> -->
<script src="AgoraRTC_N-4.7.3.js"></script>
<script src='main.js'></script>
</html>