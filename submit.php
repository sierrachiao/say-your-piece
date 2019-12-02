<!DOCTYPE html>
<html>

<head>
  <title>ARTS 260: Projection</title>

<!--  css  -->
  <style>

      body{
        margin-top: 200px;
      }
      /* text */
      h1 {
        font-family: "Helvetica", sans-serif;
        font-size: 1.5em; /*16px*/
        font-weight: bold;
        text-align: center;
      }
      p {
        font-family: "Helvetica", sans-serif;
        font-weight: 300;
        font-size: 1em; /*16px*/
        text-align: center;
      }

  </style>

</head>

<body>
<div>

      <h1>SAY YOUR PIECE</h1>
      <p>
        <br>
        Click <a href="https://cs.wellesley.edu/~schiao/arts260/input.php">here</a> to go back to the previous page.<br>
        <br>
        Built by Sierra Chiao for ARTS 260.
        </nav>
        </nav>
      </p>


</div>

</body>

</html>

<!--  php  -->
<?php

if (isset($_POST['textdata'])) {
    $data=$_POST['textdata'].PHP_EOL; //hold text input and add new line
    $fp = fopen('data.txt', 'a'); //open data.txt file as fp
    //deal with presence of double quotation marks
    $cleanData = str_replace('"', "", $data);

    fwrite($fp, $cleanData); //write input to file
    fclose($fp);
}

?>
