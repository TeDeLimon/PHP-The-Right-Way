<?php

// Variables start with a dollar sign ($) followed by the name of the variable.

$name = 'John'; // This is a string variable.

echo $name;

// Variable names are case-sensitive, so $name and $Name are different variables.

// Variables can't start with a number, but they can contain numbers after the first character.

$_123name = 'Jane'; // This is a valid variable name.
// $123name = 'Jane'; // This is an invalid variable name and will cause a syntax error.

// $this -> is a special variable in PHP that refers to the current object instance. It is used within class methods to access properties and methods of the object. It cannot be used outside of a class context and will cause an error if used in a non-class context.
// $this = 'test'; 


// Variables are assign by value, which means that when you assign a variable to another variable, it creates a copy of the value. Changes to one variable will not affect the other variable.
$age = 30;
$ageCopy = $age; // $ageCopy is a copy of $age 
$age = 31; // Changing $age does not change $ageCopy
echo $ageCopy; // Output: 30

// To assign a variable by reference, you can use the ampersand (&) symbol. This means that both variables will point to the same value, and changes to one variable will affect the other variable.
$x = 1;
$y = &$x; // $y is a reference to $x
$x = 2; // Changing $x also changes $y
echo $y; // Output: 2