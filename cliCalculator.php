<?php


echo "|----This is command line calculator---|" . "\n";

$help = "**Operation menu:**" . "\n" .
    "+ addition" . "\n" .
    "- subtraction" . "\n" .
    "* multiplication" . "\n" .
    "/ division" . "\n"	.
    "^ square" . "\n" .
    "V square root" . "\n" .
    "C clear result" . "\n" .
    "HELP for operation menu" . "\n \n";

echo $help;
calculator:
$num1 = readline("Enter number: >>");
option:
$option = strtoupper(readline("Choose operation: >>"));

if($option === "HELP"){
    echo $help;
    $option  = strtoupper(readline("Choose operation: >>"));
}elseif($option === "^"){
    $num1 = pow($num1, 2);
}elseif($option === "V"){
    $num1 = sqrt($num1);
}elseif($option === "+" || $option === "-" || $option === "*" || $option === "/"){
    $num2=readline("Enter second number: >>");
    switch($option){
        case "+":
            $num1 = $num1 + $num2;
            break;
        case "-":
            $num1 = $num1 - $num2;
            break;
        case "*":
            $num1 = $num1 * $num2;
            break;
        case "/":
            if($num2 == 0){
                echo "error! You can't divide by zero!";//add option to re-enter num2
            }else{
                $num1 = $num1 / $num2;
            }
            break;
    }
}elseif($option === "C"){
    goto calculator;
} else {
    echo "~~Whooops, incorrect operation! Try one of this:~~" . "\n";
    echo $help;
    goto option;
}
echo "Result of operation is: $num1" . "\n";
goto option;