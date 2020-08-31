<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php website</title>
</head>
<body>
    <div class="container">
    This is my first php website

    <?php

        define('Pi',3.14);
        echo "Hello world && this is printing using php";

      //variables
        $v1=10;
        $v2=8;
        echo $v1;
        echo $v2;
        echo $v1+$v2;
        echo "<br>";

        //operators
        //arithmatic operator
    echo " The value of v1 + v2 is  ";
    echo $v1 + $v2;
    echo "<br>";

    echo " The value of v1 - v2 is  ";
    echo $v1 - $v2;
    echo "<br>";

    echo " The value of v1 * v2 is  ";
    echo $v1 * $v2;
    echo "<br>";

    echo " The value of v1 / v2 is  ";
    echo $v1 / $v2;
    echo "<br>"; 

     //   assignment operator
     $newvar1= $v1;
     $newvar1 +=1;
     $newvar2= $v1;
     $newvar2 -=1;
     $newvar3= $v1;
     $newvar3 *=2;
     $newvar4= $v1;
     $newvar4 /=2;
      echo "The  value of new var is ";
      echo $newvar1;
      echo "<br>";

      echo "The  value of new var is ";
      echo $newvar2;
      echo "<br>";

      echo "The  value of new var is ";
      echo $newvar3;
      echo "<br>";

      echo "The  value of new var is ";
      echo $newvar4;
      echo "<br>";

      // comparison operator

    echo "The value of 1==2 ";
    echo var_dump(1==2);
    echo "<br>";

    echo "The value of 1!=2 ";
    echo var_dump(1!=2);
    echo "<br>";

    echo "The value of 1>=2 ";
    echo var_dump(1>=2);
    echo "<br>";

    echo "The value of 1<=2 ";
    echo var_dump(1<=2);
    echo "<br>";

    // increment/decrement operator 

    /*echo $v1++;
     echo "<br>";
     echo $v1;*/
     
     echo $v1--;
     echo "<br>";
     echo $v1;

     /*echo ++$v1;
     echo "<br>";
     echo $v1;

     /*echo --$v1;
     echo "<br>";
     echo $v1;*/
     echo "<br>";
    
     //logical operator
    $myvar1 = (true && true);
    echo var_dump($myvar1);
    echo "<br>";

    /*$myvar2 = (false && true);
    echo var_dump($myvar2);
    echo "<br>";

    $myvar3 = (true && false);
    echo var_dump($myvar3);
    echo "<br>";

    $myvar4 = (false && false);
    echo var_dump($myvar4);
    echo "<br>";

    $myvar2 = (true or false);
    echo var_dump($myvar2);
    echo "<br>";*/

    $myvar2 = (true xor true);
    echo var_dump($myvar2);
    echo "<br>";
    
    $myvar3 = (false xor false);
    echo var_dump($myvar3);
    echo "<br>";
    ?>

    <?php
        /*Data types in php
        1.String
        2.Integer
        3.Float
        4.Boolean
        5.Array 
        6.Object*/

        echo "<br> Data types <br>";
        $var = "Hey, What's Up";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 8.5;
        echo var_dump($var);
        echo "<br>";

        $var =true;
        echo var_dump($var);
        echo "<br>";
        echo Pi;
    ?>
    </div>
    
</body>
</html>