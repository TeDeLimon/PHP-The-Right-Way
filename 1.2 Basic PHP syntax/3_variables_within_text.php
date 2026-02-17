<?php

$firstName = 'John';

echo 'Hello $firstName'; // This will output: Hello $firstName
echo "Hello $firstName"; // This will output: Hello John
echo "Hello {$firstName}"; // This will also output: Hello John
echo 'Hello ' . $firstName; // This will also output: Hello John