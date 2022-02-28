<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Currency Converter"?></title>
</head>
<body>
    
<!-- =========================================================================================
                        Currency Converter By Using Switch Case
========================================================================================= -->
<?php
    $amount = 100;
    $type = 'USD';

  switch ($type){
      case 'USD':
        $rate = 86;
        break;

        case 'CAD':
        $rate = 67.7933;
        break;

        case 'EUR':
        $rate = 96.4482;
        break;

        case 'WON':
        $rate = 0.0715;
        break;

        case 'INR':
        $rate = 1.13;
        break;

        case 'KWD':
        $rate = 283.8074;
        break;
 
        default :
        $rate = 0;
        break;
  }
  $bdt = $amount * $rate;

echo "<h1 style='color:teal;display:block;text-align:center;margin-top:200px'>{$type} {$amount} = $bdt  BDT</h1>";

?>

<!-- =========================================================================================
                        Currency Converter By Using Switch Case
========================================================================================= -->


</body>
</html>