<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo " Marraige Age Check"; ?> </title>
</head>
<body>

<!-- =========================================================================================
                      Marraige age check for male and female
========================================================================================= -->
   <?php 
    
    $gender = 'Female';
    $age = '25';
    $job = false;
    $agreed = true;


    if($gender == 'Male' && $age>= 21 && $job == true && $agreed == true  ){
        echo "<h1 style='color:green;text-transform:capitalize;'>Congratuation! You Can Marry Now</h1>";
    }
    else if( $gender == 'Female' && $age >= 18 && $job == true || $job == false && $agreed == true ){
        echo "<h1 style='color:green;text-transform:capitalize;'>Congratuation! You Can Marry Now</h1>";
    } 
    else{
        echo "<h1 style='color:red;text-transform:capitalize;'>Sorry! You Are Not aligible to marry now</h1>";
    }

   
   ?> 

<!-- =========================================================================================
                      Marraige age check for male and female
========================================================================================= -->
</body>
</html>