
<?php
include('convert.php');

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
  body{
    background-color: lavender;
    text-align: center;
    margin-top: 120px;
  }
  footer {
    font-size: 12px;
    margin: 0 auto;
    max-width: 1200px;
    position: relative;
    width: 95%;
}


</style>
<head>
  <title>Currency Converter</title>
</head>
<body>
  <h1>Currency Converter</h1>
  
  
  <form method="post">
    Enter Amount:
    <input type="text" name="amount" value="1"><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From:
    <select name="from">
      <?php
        for($i=0;$i<count($rate);$i++){
            echo "<option value=\"$i\">$currency[$i]</option>";
        }


      ?>
      
      </select> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TO: <select name="to">
      <?php
        for($i=0;$i<count($rate);$i++){
           echo "<option value=\"$i\">$currency[$i]</option>";
        }


      ?>
    </select><br><br>
    <input type="submit" name="submit" value="Convert!">
  </form>
  <br>
  <?php
  if (isset($_POST['amount'])) {
    $amount=$_POST['amount'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $combine= array_combine($currency, $rate);
    $from_currency=$rate[$from];
    $to_currency=$rate[$to];
    $result=$to_currency/$from_currency;
    $resultrev=$from_currency/$to_currency;
  $output=round($result*$amount,2);
  $reverse=round($resultrev*$amount,2);
  
  echo " Conversion Result: <br><br> $amount $currency[$from] = "."$output $currency[$to]";

  echo "<br><br>Reverse Result:<br><br>$amount $currency[$to] = "."$reverse $currency[$from]";

  
  }

  ?>
  <br>
  <br><br><br>
  
</body>


</html>
