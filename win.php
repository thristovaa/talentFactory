<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Wheel</title>
   <link rel = "stylesheet" href = "./css/style_game.css">
</head>
<body>
    <div class = "mainbox" id = "mainbox">
        <div class = "box" id = "box">
            <div class = "box1">
                <span class = "front span1 "><h5>5% discount </h5></span>
                <span class = "front span2 "><h5>3% discount</h5></span>
                <span class = "front span3 "><h5>10% discount</h5></span>
                <span class = "front span4 "><h5>Discount-25%</h5></span>
                <span class = "front span5 "><h5>Free Product</h5></span>
            </div>
            <div class = "box2">
                <span class = "front span1"><h5>10% discount</h5></span>
                <span class = "front span2"><h5>Discount -25%</h5></span>
                <span class = "front span3"><h5>Try again</h5></span>
                <span class = "front span4"><h5>3% discount</h5></span>
                <span class = "front span5"><h5>5% discount</h5></span>
                
            </div>
            
        </div>

        <button class = "spin" onclick="spin()">SPIN</button>
    </div>

    <audio 
    controls = "controls"
    id = "applause"
    src = "./assets/applause.mp3"
    type = "audion/mp3"
    ></audio>


    <audio 
    controls = "controls"
    id = "wheel"
    src = "./assets/wheel.mp3"
    type = "audion/mp3"
    ></audio>

    <script src="./js/screen.js"></script>
<script src="./js/script.js"></script>  



</body>
</html>
