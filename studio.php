<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Christmas Tree Studio</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>

<?php



echo '
<script src="scripts.js"></script>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Christmas Tree Studio</a>
  <a href="gallery.html">Gallery</a>
  <a href="about.html">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <img class="hamburger" src="resources/hamburger-menu.png">
  </a>
</div>

<div class="treeContainer">
  <div id="wrapper">
  <img class= "backgroundImg" src="resources/background_1.jpg" style="z-index: -100;" draggable="false">
  <div class="treeTrunk" ><img id="trunk" src="resources/trunk.gif" alt="image error" draggable="false"></div>
  <div class="treeTrunk" ><img id="Pines" src="resources/PinesGreen.gif" alt="image error" draggable="false"></div>
  <div class="treeTrunk" ><img id="Lights" src="resources/EMPTY.svg.png" alt="image error" draggable="false"></div>
  <div class="treeTrunk" ><img id="Bulbs" src="resources/EMPTY.svg.png" alt="image error" draggable="false"></div>
  </div>
</div>
  

<script>
function updateALL() {
  updatePines();
  updateLights();
  updateBulbs();
}

  //PINES
  var treeArray = ["PinesGreen.gif", "PinesSnowy.gif", "PinesGold.gif", "PinesWhite.gif"];
  function updatePines() {

    var slide = document.getElementById("PinesSlider");
    var pineImg = document.getElementById("Pines");
   var newImage = "resources/" + treeArray[slide.value];
   pineImg.src = newImage;
  }

  //ORNAMENTS
  var bulbArray = ["EMPTY.svg.png", "BulbsBlue.gif", "BulbsGreen.gif"];
  function updateBulbs() {

    var slide = document.getElementById("BulbsSlider");
    var bulbImg = document.getElementById("Bulbs");
    var newImage = "resources/" + bulbArray[slide.value];
    bulbImg.src = newImage;
  }

  //LIGHTS
  var lightsArray = ["EMPTY.svg.png", "LightsBlue.gif", "LightsYellow.gif"];
  function updateLights() {

    var slide = document.getElementById("LightsSlider");
    var bulbImg = document.getElementById("Lights");
    var newImage = "resources/" + lightsArray[slide.value];
    bulbImg.src = newImage;
  }
</script>
  <form action="studio.php" method="post">
  <div class="decorationMenu">
  <div class="treeDecoration">
    <label for="fname">Tree Type:</label><br>
    <input type="range" min="0" max="4" value="0" id="PinesSlider" onchange="updatePines()">
  </div>
  <div class="treeDecoration">
    <label for="fname">Ornaments:</label><br>
    <input type="range" min="0" max="4" value="0" id="BulbsSlider" onchange="updateBulbs()">
  </div>
  <div class="treeDecoration">
    <label for="fname">Lights:</label><br>
    <input type="range" min="0" max="4" value="0" id="LightsSlider" onchange="updateLights()">
  </div>
  <div class="treeDecoration">
    <label for="fname">Stand Type:</label><br>
    <input type="range" min="1" max="5" value="1">
  </div>
  <div class="treeDecoration">
    <label for="fname">Skirt Type:</label><br>
    <input type="range" min="1" max="5" value="1">
  </div>
  <div class="treeDecoration">
    <label for="fname">Garland:</label><br>
    <input type="range" min="1" max="5" value="1">
  </div>
  <div class="treeDecoration">
    <label for="fname">Snow Effect:</label><br>
    <input type="checkbox" id="fname" name="fname" value="John">
  </div>
</div>
<div class="buttonContainer">
  <input class = "button" type = "reset"  value = "Save"/>
  <input class = "button" type = "submit"  value = "Load"/>

</div>
</form>';


?>
</body>
</html>