<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easter Eggs</title>
    <style>
    .box {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
    }
    #canvas {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 98;
    pointer-events: none;
    }
    .easterEggs {
    display: flex;
    flex-direction: row;
    justify-content: center;
    }
    .egg {
    width: 25px;
    height: 25px;
    filter: grayscale(100%);
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <main>
        <div class="box">
            <canvas id="canvas"></canvas>
            <div class="easterEggs" id="sparkSource">
                <img src="./images/easter-egg.png" class="egg" id="1" alt="">
                <img src="./images/easter-egg.png" class="egg" id="2" alt="">
                <img src="./images/easter-egg.png" class="egg" id="3" alt="">
                <img src="./images/easter-egg.png" class="egg" id="4" alt="">
                <img src="./images/easter-egg.png" class="egg" id="5" alt="">
                <img src="./images/easter-egg.png" class="egg" id="6" alt="">
                <img src="./images/easter-egg.png" class="egg" id="7" alt="">
                <img src="./images/easter-egg.png" class="egg" id="8" alt="">
            </div>
            <div class="card">
                <svg height="375" width="667">
                    <ellipse onclick="easterEgg(1)" cx="358" cy="110" rx="30" ry="45" style="stroke:red; fill:red; cursor:pointer"/>
                    <circle onclick="easterEgg(2)" cx="505" cy="150" r="15" style="stroke:red; fill:red; cursor:pointer"/>
                    <circle onclick="easterEgg(3)" cx="460" cy="320" r="30" style="stroke:red; fill:red; cursor:pointer"/>
                    <circle onclick="easterEgg(4)" cx="480" cy="45" r="18" style="stroke:red; fill:red; cursor:pointer"/>
                    <circle onclick="easterEgg(5)" cx="635" cy="162" r="10" style="stroke:red; fill:red; cursor:pointer"/>
                    <ellipse onclick="easterEgg(6)" cx="310" cy="273" rx="15" ry="30" style="stroke:red; fill:red; cursor:pointer"/>
                    <ellipse onclick="easterEgg(7)" cx="93" cy="170" rx="25" ry="50" style="stroke:red; fill:red; cursor:pointer"/>
                    <circle onclick="easterEgg(8)" cx="574" cy="168" r="5" style="stroke:red; fill:red; cursor:pointer"/>
                </svg>
                <script type="text/javascript" src="js/sparksAnimation.js"></script>
                <script type="text/javascript" src="js/colorEggs.js"></script>
                <script>
                    function animationToCome() {
                        alert("animation not yet available");
                    }             
                    function popup() {
                        var popup = document.getElementsByClassName("tomPopup");
                        popup[0].style.display = "block";
                        setTimeout(function() { 
                            popup[0].style.display = "none"; }, 2000);
                    }
                    function playAudio(audio) { 
                        audio.play();
                    }
                </script>
            </div>
        </div>
    </main>
</body>
</html>