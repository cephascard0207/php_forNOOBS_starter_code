<?php
//This is thePhp Starter NoobNotes.
//For Beginners/Noobs/Refreshers who want to get into Php
//This is created By Cephas Cardozo.
//This is totally free to used
//You can learn the very basic to advace topics
//Like BasicSyntax,Variables,Arrays and its types,Operators,Conditional statemnts,Loops,Functions,Strings,and much more.
//Please make sure that you comment out the other code while running a code block.






<?php
//Php Syntax

echo "HelloWorld!";
  
  //This is a Print Statement
  ?>

<?php
  //Variables
  $a = 10;
  echo $a;
  //Variable Can get Redefined
  $a = "Hi";
  echo $a;
  //Values a Variable can Store

  //1 Integer
  $b = 5;
  echo $b;
  //2 String
  $c = "Hello String";
  echo $c;
  //3 Float
  $d = 1.5;
  echo $d;
  //4 Booloean
  $i_own_a_cat = false;
  echo $i_own_a_cat;
  //5 Array
  $B_Day = [1, 2, 3, "2nd Feb", 0.5, false];
  echo $B_Day;

  //6 Object
  //$o_BJECT = new Book();
  //Object not required for Internshala Session Training

  //7 Null - refers to no Value
  $n_ull = null;
  echo $n_ull;

?>

<?php
//Operators - used to perform operations on values and variables ex: x + y = 13
//Variables when used along wiht operators are known as operands

  //1. Arithemetic Operators

  //a) Addition
  $k = 3;
  $j = 2;
  echo $k+$j;
  echo 10+5;
  //b) Subtraction
  $q = 3;
  $Q = 2;
  echo $k-$j;
  echo 10-5;
  //c) Multiplication
  $p = 3;
  $P = 10;
  echo $p * $P;
  echo 10*3;
  //d) Division
  $o = 3;
  $O = 10;
  echo $o/$O;
  echo 3/10;
  //e) Modulo
  //Gives Remainder
  $u = 1;
  $U = 2;
  echo $U%$u;

  //2) Assignment Operators - used to assign values to variables.

  //a) Equal to (=)
  $R = 90;
  echo $R;
  //b) Plus equal to(+=)
  $Q = 10;
  $Q += 15;
  echo $Q;
  //c) Minus equal to(-=)
  $y = 5;
  $y -= 5;
  echo $y;
  //d) Multiply equal to (*=)
  $n = 1;
  $n *= 1;
  echo $n;
  //e) Divide equal to (/=)
  $E = 1;
  $E /=1;
  echo $E;
  //f) Modulo equal to (%=)
  $D = 1;
  $D %= 2;
  echo $D;


  //3) Increment/Decrement Operators

  //Increment

  $l = 5;
  $l++;
  echo $l;

  //Decrement

  $s = 5;
  $s --;
  echo $s;


  //4) Comparison Operators/Boolean Operators

  //Equal to equal to (==)
  //used to check if operands are equal or not

  $a == $b;

  //Not Equal to (!=)
  //used to check if operands are not equal to each other

  $a != $b;

  //Less than (<)
  //used to check if left operand is smaller than right operand

  $a < $b;

  //Less than or Equal to(<=)
  //used to check if left operand is smaller/equal to right operand

  $a <= $b;

  $a != $b;

  //Greater than (>)
  //used to check if left operand is greater than right operand

  $a > $b;

  //Greater than or Equal to(>=)
  //used to check if left operand is smaller/equal to right operand

  $a >= $b;

  //5) Logical Operators

  //and operator
  //(4 < 5) && (4 > 4)
  // if all true than true
  // if all false or one false  than false

  //or operator
  //(4 < 5) || (4 > 4)
  //retursn true if any of the expressions is true

  //not operator
  //!(4 < 5)true
  //but not operator takes only one value and reverses its Boolean value





  //Conditional Statements
  //if condition executes if one condition is true
  if(boolean_expression){
    //code to execute if expression is true
  }
    //code to execute if expression is false
  

  //if_else Statement
  //it executes code even if the condition is faalse
  if(boolean_expression){
    //code to execute if condition is true
  }else{
    //code to execute if condition is false
  }

  //if_elseif_else Statement
  //to deal with more than two conditions
  $marks = 99;

  if(marks > 90){
    echo "Excellent";
  }else if(marks > 50){
    echo "Good";
  }else{
    echo "fail";
  }


  //Switch
  //Just like if_elseif_else Statement
  $numb = 1;
  Switch($numb){
    case "1":
    echo "It is One";
    break;

    case "2":
    echo "It is Two";
    break;

    case "3":
    echo "It is Three";
    break;
  }

?>



<?php

  //Loops
  //1.while
  //The while loop executes a code block if and as long a specific condition is true
  $n = 1;
  while($n <= 10){
    //code to be executed multiple times
    if($n == 10){
      //break;
      continue;
    }
    echo $n*2;
    $n++;
  }

  //2.do-while

  do{
    echo $n*2;
    $n++;
  }while($n <= 10)


  //3.for
    for($n = 1; $n <= 10; $n++;){
      echo $n*2;
    }

  //4.foreach
  //it is a special loop only create for arrays
  $arr = array(2,4,6,8,10);
  foreach($arr as $num){
    echo $num."";
  }

?>

<?php 

$numbers = array(1,2,3,4,5,6,7,8,9,10);
$sum = 0;

foreach($numbers as $number){
  $sum = $sum + $number;
  if($sum > 20){
    break;
  }
}

echo $sum . "" . $number;


?>






<?php
  //Arrays in Php - It is a collection of some values of the same datatype like strings, integers and more.

  //1.Numeric Indexed Array
  //This has a numeric index that starts from zero.
  $preseidents = array("George","Barrack","Donald");
  echo $preseidents;
  echo $preseidents[0];

  foreach($preseidents as $preseident){
    echo $preseidents ."";
  }


  //2.Associative Arrays
  //Have string or text as indices
  $arrayE = array("key" => value, "key" => value, "key" => value, "key" => value);
  echo $arrayE["key"]


$years = array("George" => 2001, "Barrack" => 2012, "Trump" => 2017);
  foreach ($years as $name => $year) {
    echo $name . " was first elected in " . $year . "\n";
}

  //3.Multidimensional Arrays
  //They are Arrays of arrays
  $students = array(
    "Amit" => array(
      "Maths" => 80,
      "Sci" => 90,
      "Eng" => 75
    ),
    "Chirag" => array(
      "Maths" => 60,
      "Sci" => 80,
      "Eng" => 50
    ),
    "Vandana" => array(
      "Maths" => 100,
      "Sci" => 100,
      "Eng" => 100
    )
  )

  foreach ($students as $student => $subjects){
    foreach($subjects => $marks){
      echo $student . "has scored" . $mark . "in" $subject . "\n"
    }
  }
?>

<?php
  //Strings
  $variable = "String";
  //Escape Characters
  // \n- adds a new line,\t- adds a tab space
  $car_name = "Bmw";
  echo "My car is $car_name\n";
  echo "Its very fast!";

  //String concatenation operator "." yup a dot!
  //The above can can be written again below like this. 
  echo "My car" . $car_name . "its FAST!";



  //Functions
  //it is a block of code that performs a specific task

//Function example
  function get_max($a,$b =0){
    if($a > $b){
      return $a;

    }else{ $b}
  }
  $max = get_max(-5 , 10);
  echo $max;
  //Line 371 -calling the function
  //The result is 10


  //Scope of a variables
  //Local Variable
  //Global Variable

  //1.Local Variable
  //it is defined within a function
  //their scope is limited to only inside of the function

  //The function example is an example of this
  


  //2.Global Variable
  //it is defined outside a function
  //their scope is limited to only outside of the function

  $abc = "hi";

  function a(){
    $abc = "Hey";
    echo $abc;
  }

  function b(){
    echo $abc;
    //here abc is not defined so it will print nothing
  }

  a();
  b();
  echo $abc;



  //GLOBAL Variable IN DEPTH

  //HOW TO ACESS GBL VARIABLE INSIDE Function
  //BY USING GLOBAL KEYWORD


    $abcd = "hi";

  function abcd(){
    global $abc;
    //here we have used the global keyword which will echo in the next statement the value/string "hi"
    echo $abcd;
  }

  a();
  echo $abcd;

  //$GLOBALS
  //it is a predefined built in Associative array - the key = value pair get added to this array

  //TO ACESS A GLOABAL VARIABLE USING $GLOBALS

  $GLOBALS('abc') = "Hey";
  echo $GLOBALS('abc');

  //SUPERGLOBAL VARIABLE
  //A VAR AVAILABLE IN ALL SCOPES,CAN BE ACESSED IN AND OUT OF A Function

?>
