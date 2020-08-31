<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.container{
    max-width:80%;
    background-color:rgb(218, 192, 192);
    margin:auto;
    padding:23px;
}
</style>
<body>
<div class="container">
<h1>Lets learn about Php</h1>
<p>Your Party status is here:</p>

<?php
    $age=11;
    if($age>18)
    {
        echo "You can go to the party";
    }
    elseif ($age==11) {
        echo "You are 11 years old";
    }
    else {
        echo "You cannot go to the party";
    }

    //arrays
    echo "<br>";
    $languages=array("Phython", "C++", "Php", "Nodejs");
    /*echo $languages[0];
    echo count($languages);*/

    //loops
     $a=0;
     while ($a<=10) {
         echo "<br>The value of a is: ";
         echo $a;
         $a++;
     }

     //Iterating arrays in php, using while loop
     $a=0;
     while ($a<count($languages)) {
         echo "<br>The value of languages: ";
         echo $languages[$a];
         $a++;
     }
        //do while loop
        $a=200;
        do {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }while ($a<10);
     
/*Iterating arrays in php, using do while loop
        $a=0;
        do {
            echo "<br>The value of languages: ";
            echo $languages[$a];
            $a++;
        }while ($a<count($languages));*/ 

        //for loop

        for ($a=2; $a<5; $a++) { 
            echo "<br>The value of a from for loop is: ";
            echo $a;
        }
        
        //for each loop
        foreach($languages as $value){
            echo "<br>The value is from for each loop is: ";
            echo $value;
        }

        //function
        function print_str(){
            echo "<br>Five";
        }
        print_str();

        function print_no($no){
            echo "<br>Your number is: ";
            echo $no;
        }
        print_no(45);
        print_no(67);
        print_no(89);
?>
</div>
    
</body>
</html>