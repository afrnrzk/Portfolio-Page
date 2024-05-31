<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Afrina's Calculator</title>
  <link rel="icon" href="images/icon.png" type="image/icon type">
  <link rel="stylesheet" href="css/calculatorcss.css">
</head>
<body>
  <div class="con">
    <div class="calculator">
      <form name="calc">
        <div class="display">
          <input type="text" name="display" readonly>
        </div>
        <div>
          <input type="button" value="AC" onclick="calc.display.value = ''" class="operator">
          <input type="button" value="DE" onclick="calc.display.value = calc.display.value.slice(0, -1)" class="operator">
          <input type="button" value="." onclick="calc.display.value += '.'" class="operator">
          <input type="button" value="/" onclick="calc.display.value += '/'" class="operator">
        </div>
        <div>
          <input type="button" value="7" onclick="calc.display.value += '7'">
          <input type="button" value="8" onclick="calc.display.value += '8'">
          <input type="button" value="9" onclick="calc.display.value += '9'">
          <input type="button" value="*" onclick="calc.display.value += '*'" class="operator">
        </div>
        <div>
          <input type="button" value="4" onclick="calc.display.value += '4'">
          <input type="button" value="5" onclick="calc.display.value += '5'">
          <input type="button" value="6" onclick="calc.display.value += '6'">
          <input type="button" value="-" onclick="calc.display.value += '-'" class="operator">
        </div>
        <div>
          <input type="button" value="1" onclick="calc.display.value += '1'">
          <input type="button" value="2" onclick="calc.display.value += '2'">
          <input type="button" value="3" onclick="calc.display.value += '3'">
          <input type="button" value="+" onclick="calc.display.value += '+'" class="operator">
        </div>
        <div>
          <input type="button" value="00" onclick="calc.display.value += '00'">
          <input type="button" value="0" onclick="calc.display.value += '0'">
          <input type="button" value="=" onclick="calc.display.value = eval(calc.display.value)" class="equal operator"><!--use js-->
        </div>
      </form>
    </div>
  </div>
  <a href="index.php" class="home-button">Home</a><!--back to Afrina's page-->
</body>
</html>
