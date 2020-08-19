<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Captcha Validation</title>
</head>

<body>
    <!-- <p id="captcha"></p>

    <h4>What is the sum of the number?</h4>

    <input type="text" id="txt" placeholder="please input your result" />

    <br />
    <br />
    <p style="color: green;" id="right"></p>
    <p style="color: red;" id="wrong"></p>

    <button onclick="gen_cap()">Refresh</button>
    <button onclick="check_cap()">Submit</button> -->

    <?php

    $first_num = rand(1,10);
    $second_num = rand(1,10);

    echo $first_num . " + " . $second_num;
    



    ?>
    <h4>What is the sum of the number?</h4>
    <form method="POST" action="">

        <input type="hidden" name="no1" value="<?php echo $first_num?>">
        <input type="hidden" name="no2" value="<?php echo $second_num?>">

        <input type="text" name="answer" placeholder="Input your answer here">
        <br>
        <br>
        <input type="submit" value="Refresh" onclick='window.location.reload(true);'>
        <input type="submit" name="submit" value="Submit">
        <br><br>

    </form>

    <?php
    if(isset($_REQUEST["submit"]))
    {
      $answer=$_REQUEST["answer"];
      $number1=$_REQUEST["no1"];
      $number2=$_REQUEST["no2"];
      $total=$number1+$number2;
      if($total==$answer)
      {
        echo '<p style="color:green">Your answer is correct.</p>';
      }
      else{
        echo '<p style="color:red">Your answer is wrong.</p>';
      }
    
    }
    ?>



</body>

</html>