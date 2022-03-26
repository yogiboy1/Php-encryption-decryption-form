<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>encrypt / decrypt php</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<form action="check.php" method="post" style=" width: 50vw; margin-left : 25vw;">
  <div>
    <label for="name">Input</label>
    <input type="text" name="name" id="name" value="" />
  </div>
   
  <input type="radio" name="rad" id="rad1" value="A"  onchange="valueChanged()">Encrypt</input>
  <input type="radio" name="rad" id="rad2" value="B"  onchange="valueChanged2()">Decrypt</input>
  <div>
    <input class="g-button g-button-submit" type="submit" value="Submit" />
  </div>
</form>  

<div class="jfk-bubble active">
  <p>
    Pls enter a string if you want to encode it or enter the encoded number if you want to decode it.<h4>PLS DO NOT ENTER A COMBINATION OF LETTERS AND NUMBERS AS IT IS INVALID</h4>
    <a href="rules.JPG">Rules</a>
  </p>
  <div class="jfk-bubble-arrow jfk-bubble-arrowright"></div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./new.js"></script>
<script>
    function valueChanged(){
        if(document.getElementById("rad1").checked == true)
        {
            document.getElementById("rad2").checked = false;
        }
    }
    function valueChanged2(){
        if(document.getElementById("rad2").checked == true)
        {
            document.getElementById("rad1").checked = false;
        }}
</script>
</body>

</html>