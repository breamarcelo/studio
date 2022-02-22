<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    
        <div class="main">
            <div class="head">
                <div class="filter">
                    <div class="head-content">
                        <p>MUSIC RECORDING, MIXING, <br>POST PRODUCTION</p><br><br>
                        <button>LEARN MORE</button>
                    </div>
                </div>
            </div>
            
            <div class="body">
                <div class="content1">
                    <div class="logo">
                        <img src="logo.svg">
                    </div>
                    <div class="feed">
                        <div class="feed-item">
                            <p class="feed-title">Lorem ipsum</p>
                            <p class="feed-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porta sagittis porta. Etiam nec odio ante.</p>
                        </div>
                        <div class="feed-item">
                            <p class="feed-title">Lorem ipsum</p>
                            <p class="feed-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porta sagittis porta. Etiam nec odio ante.</p>
                        </div>
                    </div>
                </div>
                <div class="content3">
                    <div class="image-gallery">
                        <img src="01.jpg" class="gallery-item">
                        <img src="02.jpg" class="gallery-item">
                        <img src="03.jpg" class="gallery-item">
                        <img src="04.jpg" class="gallery-item">
                        <img src="05.jpg" class="gallery-item">
                        <img src="06.jpg" class="gallery-item">
                        <img src="07.jpg" class="gallery-item">
                        <img src="08.jpg" class="gallery-item">
                        <img src="09.jpg" class="gallery-item">
                    </div>
                    <div class="modal" id="modal">
                        <button class="close-modal" onclick="closeFunc();">X</button>
                        <img id="modalImg" src="">
                    </div>
                </div>
                <div class="content2">
                    <div class="social"><a href="#"><img class="social-icon" src="youtube.png"></a></div>
                    <div class="social"><a href="#"><img class="social-icon" src="facebook.png"></a></div>
                    <div class="social"><a href="#"><img class="social-icon" src="instagram.png"></a></div>
                    <div class="social"><a href="#"><img class="social-icon" src="twitter.png"></a></div>
                </div>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
    </body>
    </html>