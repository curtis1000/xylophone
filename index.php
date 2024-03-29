<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Magic Xylophone | soundstep</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/main.css"/>
</head>
<body>

<div id="container">

    <div id="header">
        <div class="allow">Click "Allow" above to play the xylophone just by waving your hands.</div>
        <div class="instructions">To play the xylophone, turn up the volume and wave your hands.</div>
        <div class="browsersWithVideo">This demo lets you play the xylophone using motion detection in your browser. Install <a href="https://www.google.com/chrome" target="_blank">Chrome</a> to play.</div>
    </div>

    <div id="content">

        <video id="webcam" autoplay width="640" height="480"></video>

        <video id="video-demo" controls="controls" poster="videos/jsdetection.jpg" width="640" height="480"  onclick="if(/Android/.test(navigator.userAgent))this.play();">
            <source src="videos/jsdetection.mp4" type="video/mp4" />
            <source src="videos/jsdetection.ogg" type="video/ogg" />
            <source src="videos/jsdetection.webm" type="video/webm" />
            Your browser doesn't support the html 5 video tag.
        </video>

        <canvas id="canvas-source" width="640" height="480"></canvas>
        <canvas id="canvas-blended" width="640" height="480"></canvas>
        <div class="motion-cam">Motion cam</div>

        <div id="xylo">
            <div id="back"></div>
            <div id="note0" class="note"></div>
            <div id="note1" class="note"></div>
            <div id="note2" class="note"></div>
            <div id="note3" class="note"></div>
            <div id="note4" class="note"></div>
            <div id="note5" class="note"></div>
            <div id="note6" class="note"></div>
            <div id="note7" class="note"></div>
        </div>
    </div>

    <div class="loading">Loading assets...</div>

    <div class="backFromVideo"><a href="#">Back<a/></div>

    <div class="introduction">
        <p>This demo lets you play the xylophone using motion detection in your browser.</p>
        <p>Please allow access to your camera and microphone above.</p>
    </div>

    <div class="browsers">
        <p>This demo lets you play the xylophone using motion detection in your browser.</p>
        <p>Install <a href="https://www.google.com/chrome" target="_blank">Chrome</a> to play, or <a href="#" id="watchVideo">watch this video</a> to check it out first.</p>
    </div>

    <div id="footer">
        <div class="magic">Magic Xylophone</div>
        <div class="stinkdigital"><a href="http://www.stinkdigital.com/" target="_blank"><img src="images/stinkdigital.png"/><a/></div>
        <div class="soundstep"><a href="http://www.soundstep.com/blog/2012/03/22/javascript-motion-detection/" target="_blank"><img src="images/soundstep.png"/></a></div>
    </div>

</div>

<script src="js/libs/jquery.js"></script>
<script src="js/libs/buffer-loader.js"></script>
<script src="js/app.js"></script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36294101-2']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>
</html>