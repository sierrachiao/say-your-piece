<!DOCTYPE html>
<html>

<head>
  <title>ARTS 260: Projection</title>

<!--  css  -->
  <style>
      body{
        margin-top: 200px;
      }

      /* text field */
      input {
        width: 50%;
        margin-left: 25%;
        font-size:1.5em;
      }
      /* when selected */
      /* input: focus {
        border: 3px solid #555;
      } */
      /* submit button */
      input[type=submit] {
        width: 10%;
        background: lightgrey;
        border: none;
        align: RIGHT;
      }

      /* text */
      h1 {
        font-family: "Helvetica", sans-serif;
        font-weight: bold;
        font-size: 2.5em; /*16px*/
        text-align: center;
      }
      p {
        font-family: "Helvetica", sans-serif;
        font-size: 1.5em; /*16px*/
        font-weight: 300;
        text-align: center;
      }
  </style>

</head>

<body>
<div>

<!--  form  -->

    <form autocomplete="off" method="post" action="submit.php">
      <!-- action="submit.php" -->
      <h1>SAY YOUR PIECE</h1>
      <p>
        This is an exploration of the news cycle.<br>
        What you choose to enter into the text-box below will immediately be projected, publicly, onto Pendleton.<br>
        To say your piece, what is currently being projected will be erased. Others can erase your piece too.<br>
        <br>
        Nothing will be censored. All input is anonymous.<br>
        Speak your institutional criticisms, call attention to social issues, voice passionate opinions. <br>
        <br>
        <br>
        Input is limited to 140 characters.<br>
        But free speech &ne; hate speech, so don't be a dick.<br>

        </nav>
        </nav>
      </p>
      <input type="text" name="textdata" maxlength="140" autocomplete="off"><br>
      <input type="submit" name="submit">
    </form>

</div>

</body>

</html>
