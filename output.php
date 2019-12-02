<html>
<head>
  <!-- load p5.js library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.js"></script>
  <!-- refresh content after 5 seconds -->
  <meta http-equiv="refresh" content="5" >
</head>
<body>



  <?php

  function getLine(){
    $line = '';

    $f = fopen('data.txt', 'r');
    $cursor = -1;

    fseek($f, $cursor, SEEK_END);
    $char = fgetc($f);

    /**
     * Trim trailing newline chars of the file
     */
    while ($char === "\n" || $char === "\r") {
        fseek($f, $cursor--, SEEK_END);
        $char = fgetc($f);
    }

    /**
     * Read until the start of file or first newline char
     */
    while ($char !== false && $char !== "\n" && $char !== "\r") {
        /**
         * Prepend the new char
         */
        $line = $char . $line;
        fseek($f, $cursor--, SEEK_END);
        $char = fgetc($f);
    }
    return $line;
  }
    $display = getLine();

    //deal with presence of double quotation marks
    if(preg_match('"', $display)) {
      $display = str_replace('"', "''", $display);
    }

  ?>


  <script>

    new p5();

    // var fileText = [];
    // var check = [];
    var display = "";

    function preload(){
      display = "<?php echo strtoupper($display) ?>"; //get most recent data.txt input saved using php code below
      //fileText = loadStrings("data.txt");
    }

    function setup() {
      //createCanvas(1280, 800); //laptop fullscreen setting
      //createCanvas(1920, 1080); //projector fullscreen setting //Panasonic G-6-PR Long throw
      createCanvas(windowWidth, windowHeight);
      img = loadImage('qr-code.png'); // Load the image
    }

    // function windowResized() {
    //   resizeCanvas(windowWidth, windowHeight);
    // }

    function draw() {
      background('#000000');
      textFont('Helvetica');
      textSize(150);
      textStyle(BOLD);
      textAlign(CENTER, CENTER);
      console.log(display);
      fill("white");
      //text(display, 0, 0, 1280, 800); //laptop fullscreen
      //text(display, 100, 0, 1720, 1080); //projector fullscreen
      text(display, 100, 0, windowWidth-200, windowHeight); //projector fullscreen


      textSize(40);
      textStyle(ITALIC);
      textAlign(RIGHT, BOTTOM);
      text("bit.ly/354eQLW",100, 100, windowWidth-200, windowHeight-200);

      //QR Code
      var imgSize = (img.height / 6);
      image(img, windowWidth-imgSize-100, windowHeight-imgSize-150, imgSize, imgSize);
    }

</script>
</body>
</html>
