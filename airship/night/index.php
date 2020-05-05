<title>SMB3 Airship Theme</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<style>
audio { display:none;}
        * {
            margin: 0;
            padding: 0;
        }
        .imgbox {
            display: grid;
            height: 100%;
        }
        .center-fit {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
        }

        body {
            overflow: hidden;
        }
    </style>
	
<script>
function toggleSound() {
  var audioElem = document.getElementById('audio');
  if (audioElem.paused)
    audioElem.play();
  else
    audioElem.pause();
}

        function changeImage() {
            var image = document.getElementById('myImage');
            if (image.src.match("/images/1024px-Speaker_Icon.svg.png")) {
                image.src = "/images//1024px-Speaker_Icon_off.png";
            }
            else {
                image.src = "/images/1024px-Speaker_Icon.svg.png";
            }
        }

</script>
	
</head>
<body style="background-color:black">
<div class="imgbox">
    <a href="javascript:void();" onclick="toggleSound(); changeImage();" class="center-fit"><img id="myImage" class="center-fit" style="filter:invert();" src="/images/1024px-Speaker_Icon.svg.png"></a>
</div>
<audio id="audio" autoplay="true" loop="true" src="../songs/airship-theme-night.mp3">
