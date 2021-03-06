<?php
$email = $_GET['email'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HaloDoc</title>
    <link rel="icon" type="image/png" href="img/Peduli Anak.png" />

    <link rel="stylesheet" href="./css/chat.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="containerr">

        <div class="links">
            <ul>
                <li>
                    <a href="home.php? email=<?= $email ?>" class="active">Kembali</a>
                </li>
                <li>
                    <a href="kontakDokter.php? email=<?= $email ?>" class="active">Kontak Dokter</a>
                </li>
            </ul>
        </div>

        <div class="hamburger-menu">
            <div class="bar"></div>
        </div>
    </div>
    <!-- CHAT BAR BLOCK -->
    <div class="content">

        <div class="full-chat-block">
            <!-- Message Container -->
            <div class="outer-container">
                <div class="chat-container">
                    <!-- Messages -->
                    <div id="chatbox">
                        <h5 id="chat-timestamp"></h5>
                        <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                    </div>

                    <!-- User input box -->
                    <div class="chat-bar-input-block">
                        <div id="userInput">
                            <input id="textInput" class="input-box" type="text" name="msg" placeholder="Tap 'Enter' to send a message">
                            <p></p>
                        </div>

                        <div class="chat-bar-icons">
                            <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                            <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                        </div>
                    </div>

                    <div id="chat-bar-bottom">
                        <p></p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./js/responses.js"></script>
<script src="./js/chat.js"></script>

</html>