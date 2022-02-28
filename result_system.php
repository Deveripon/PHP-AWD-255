<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo " GPA Result Check"; ?> </title>
</head>
<body>

<!-- =========================================================================================
                     Result system check with GPA Grading
========================================================================================= -->
   <?php 
    
    $mark = 90;

    if( $mark > 0 && $mark< 33){

        echo " <h1 style='color:red;text-transform:capitalize;'>Sorry! You are fail!</h1>";
    }
    else if( $mark >= 33 && $mark <= 39){
        echo " <h1 style='color:red;text-transform:capitalize;'>Great! You are passed but not Satisfactory</h1> <br/> <h1 style='color:red;text-transform:capitalize;'>You obtained D grade</h1>";
    }
    else if( $mark >= 40 && $mark <= 49){
        echo " <h1 style='color:pink;text-transform:capitalize;'>Great! You are passed but need to improve</h1> <br/> <h1 style='color:pink;text-transform:capitalize;'>You obtained C grade</h1>";
    }
    else if( $mark >= 50 && $mark <= 59){
        echo " <h1 style='color:yellow;text-transform:capitalize;'>Great! You are passed</h1> <br/> <h1 style='color:yellow;text-transform:capitalize;'>You obtained B grade</h1>";
    }
    else if( $mark >= 60 && $mark <= 69){
        echo " <h1 style='color:cyan;text-transform:capitalize;'>Congratulations! You are passed</h1> <br/> <h1 style='color:cyan;text-transform:capitalize;'>You obtained A- grade</h1>";
    }
    else if( $mark >= 70 && $mark <= 79){
        echo " <h1 style='color:teal;text-transform:capitalize;'>Congratulations! You Did a very good result</h1> <br/> <h1 style='color:teal;text-transform:capitalize;'>You obtained A grade</h1>";
    }
    else if( $mark >= 80 && $mark <= 100){
        echo " <h1 style='color:Gold;text-transform:capitalize;'>Congratulations! You Did a very Outstanding result</h1> <br/> <h1 style='color:Gold;text-transform:capitalize;'>You obtained A+ grade</h1>";
    }
    else{
        echo " <h1 style='color:red;text-transform:capitalize;'>OOPS! Invalid result</h1>";
    }
   
   
   ?> 
   <style>
       h1{
           display: block;
           text-align: center;
           margin: auto;
       }
   </style>
   <!-- =========================================================================================
                     Result system check with GPA Grading
        ========================================================================================= -->
</body>
</html>